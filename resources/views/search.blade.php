@extends('master')
@section("content")

  <div class="custom-product">
      <div class="col-sm-4">
            <a href="">Filtro</a>
      </div>
      <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Resultado da Pesquisa</h2>
            @foreach ($products as $item)
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" >
                        <div class="">
                        <h3>{{$item['name']}}</h3>
                        <h3>{{$item['description']}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection


