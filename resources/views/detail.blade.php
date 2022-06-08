@extends('master')
@section("content")
<div class="container" >
  <div class="row">
    <div class="col-sm-6">
    <img class="detail-img" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">
        <a href="/">Voltar</a>
        <h2>{{$product['name']}}</h2>
        <span>Preço: {{$product['price']}}</span>
        <p>Descriçaõ: {{$product['description']}}:</p>
        <span>Categotria: {{$product['category']}}</span>

        <form action="/add_to_cart" method="post" class="mt-5">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary mb-3 " >Adicionar ao carrinho</button>
        </form>
    
        <button class="btn btn-success" style="display:block;">Comprar agora</button>
    </div>
  </div>
</div>
@endsection