<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>E-commerce</title>
</head>
<body>
    <!--importando o header.blade.php - esse arquivo-->
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height:600px;
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:20%;
    }
    .trending-wrapper{
        margin: 100px 30px 30px 30px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width:500px !important;
    }
</style>
</html>