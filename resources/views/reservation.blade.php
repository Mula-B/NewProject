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
  <h1>Overzicht Reserveringen</h1>
  <br>
  <br>
  <table>
  <tr>
    <th>Datum</th>
    <th>Tijd</th>
    <th>Tafel</th>
    <th>Naam</th>
    <th>Telefoon</th>
    <th>Personen</th>
    <th>Reservering gebruikt</th>
  </tr>

@foreach($reservations as $reservation)
<tr>
    <td>{{$reservation->date}}</td>
    <td>{{$reservation->time}}</td>
    <td>{{$reservation->tafel}}</td>
    <td>{{$reservation->naam}}</td>
    <td>{{$reservation->phone}}</td>
    <td>{{$reservation->aantal_personen}}</td>
    <td>{{$reservation->reservering_gebruikt}}</td>
    <td><a href="{{ url('reservation/order/'.$reservation->id)}}" class="button">bestelling plaatsen</a></td>
    <td><a href="{{ url('reservation/order/')}}" class="button">bestelling bekijken</a></td>
    </tr>

@endforeach
</table>
</html>