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
  <h1>Bestelling plaatsen</h1>
  <br>
  <br>


    <br>
    <br>
    
  <table>
  <tr>
    <th>Naam Gerecht</th>
    <th>Prijs Gerecht</th>
    <th></th>
  </tr>
  @foreach($products as $product)
    <tr>
    <td>{{$product->productname}}</td>
    <td>€{{$product->productprice}}</td>
    <td><a href="{{ url('#')}}" class="button">Toevoegen aan bestelling overzicht</a></td>
</tr>
    @endforeach
  
</div>
</table>
</html>