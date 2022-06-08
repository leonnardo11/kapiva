<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $products['name'] }} - ECOIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container-product">

            <div class="product-image">
                @if($products->image)
                <img src="{{ asset($products->image) }}" alt="{{$products->name}}" class="product">
                @else
                <img src="{{ asset('images/404.png') }}" alt="Imagem não encontrada" class="product" title="Imagem não encontrada">
                @endif
            </div>
            <div class="product-text">
                <h1>{{ $products['name'] }}</h1>
                <p>{{ $products['description'] }}</p>
                <p>R$ <span>{{ $products['price'] }}</span></p>
                <div class="buttons-product">
                    <form method="POST" action="{{route('cartlist', $products)}}">
                        @csrf
                        <p color="style:green;"> {{session()->get('sucess')}} </p>
                        <button type="submit">Adicionar ao carrinho</button>
                        <button type="submit">Comprar agora</button>
                    </form>
                </div>
            </div>
        </main>
        </body>

</html>
