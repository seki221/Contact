@extends('Managemant/main')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('find','Managemant/find')

@section('content')
<form action="find" method="POST">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if (@isset($content))
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>gender</th>
    <th>email</th>
  </tr>
  <tr>
    <td>{{$content->id}}</td>
    <td>{{$content->name}}</td>
    <td>{{$content->gender}}</td>
    <td>{{$content->email}}</td>
  </tr>
</table>
@endif
@endsection