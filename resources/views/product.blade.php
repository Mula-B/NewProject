<html>
<head>
<link rel="stylesheet" href="{{ asset('css/css.css') }}">

</head>
<div class="topnav">
 <h3>Dashboard Excellent Taste</h3>
</div>

<div class="sidenav">
    <a href="{{ url('dashboard')}}">Dashboard</a>
    <a href="{{ url('reservation')}}">Reserveringen</a>
    <a href="#">Bestellingen</a>
    <a href="#">Producten</a>
    <a href="#">Overzicht</a>
</div>


<div class="content">
  <h1>Producten selecteren</h1>
  <br>
  <br>

  <table>
  <tr>
    <th>id</th>
    <th>Naam Product</th>
    <th>Prijs Product</th>
  </tr>
    @foreach($products as $product)
    <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->productname}}</td>
    <td>€{{$product->productprice}}</td>
    <td><a href="{{ url('reservation/order/' .$product->id)}}" class="button">Toevoegen aan bestelling</a></td>
</tr>
    @endforeach
</table>
</html>