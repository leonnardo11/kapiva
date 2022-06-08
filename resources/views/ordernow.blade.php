@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
     <table class="table">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Total</td>
      <td>${{$total}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Taxa</td>
      <td>R$ 10</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Entrega</td>
      <td>10 dias uteis </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total final</td>
      <td>R${{$total + 10}}</td>
    </tr>
  </tbody>
</table>
<div>
<form action="/orderplace" method="post">
    @csrf
<div class="mb-3">
    <label class="form-label" >Email address</label>
    <input name="address"type="text" class="form-control"  aria-describedby="emailHelp" placeholder="digite seu endereço">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label d-block">Forma de pagamento</label>
    <div>
        <input type="radio" value="cash" name="payment"><span>Cartão</span>
    </div>
    <div>
    <input type="radio" value="cash" name="payment"><span>Pix</span>
    </div>
    <div>
    <input type="radio"  value="cash" name="payment"><span>Boleto</span>
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary">Finalizar</button>
</form>
</div>

     </div>
</div>
@endsection 