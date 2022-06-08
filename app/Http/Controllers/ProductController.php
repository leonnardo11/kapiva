<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index (Product $product){
        return view('product')->with(['product.index' => Product::all(), 'categories' => Category::all()]);
    }

    public function create(){
        return view('/product/create')->with(['categories' => Category::all()]);
    }

    public function store(Request $request){
        $image = "/storage/".$request->file('image')->store('itens'); //salva a imagem no storage e retorna o caminho
        $product = Product::create([ //cria um novo produto no banco de dados com os dados do formulário e o caminho da imagem salva no storage no banco de dados
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'image' => $image,
        ]);
        session()->flash('success','Produto Criado com Sucesso!');
        return redirect(route('product.index'));
    }

    public function destroy(Product $product){
        $product->delete();
        session()->flash('sucess', 'Produto removido com sucesso');
        return redirect(route('product.index'));
    }

    public function edit(Product $product, Category $categories){

        return view('product.edit')->with(['products'=> $product,
                                            'categories'=> Category::all()]);
    }

    public function update(Product $product, Request $request){
        if($request->image){
            $image = "/storage/".$request->file('image')->store('itens');
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
                'image' => $image
            ]);
        }
        else
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
            ]);
        session()->flash('success','Produto Editado com Sucesso!');
        return redirect(route('product.index'));
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart =  new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/login');
        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId= Session::get('user')['id'];
        return Cart::Where('user_id', $userId)->count();
    }
    function cartList(){
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.id as cart_id')
         ->get();

         return view('cartlist',['products'=>$products]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total =  $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.id as cart_id')
         ->sum('products.price');

         return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req){
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pendente";
            $order->payment_method=$req->payment;
            $order->payment_status="pendente";
            $order->address=$req->address;
            $order->save();
        }
        $req->input();
        return redirect("/");
    }

    function myOrders(){
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();

         return view('myorders',['orders'=>$orders]);
    }
}
