@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Meus Pedidos</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2 style="font-size:2em;">Nome: {{$item->name}}</h2>
                      <h2 style="font-size:1em;" >Status de entrega: {{$item->description}}</h2>
                      <h2 style="font-size:1em;">Endereço: {{$item->address}}</h2>
                      <h2 style="font-size:1em;">Status de pagamento: {{$item->payment_status}}</h2>
                      <h2 style="font-size:1em;">Forma de pagamento: {{$item->payment_method}}</h2>
                      <hr>
                    </div>
             </div>
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 