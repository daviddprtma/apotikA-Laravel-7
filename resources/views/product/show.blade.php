@extends('layouts.conquer')
@section('content')
<div class="container">           
  <table class="table">
    <thead>
        <h2>Product Detail</h2>
      <tr>
        <th>Data</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $data -> id}}</td>
        </tr>
        
        <tr>
            <td>Nama</td>
            <td>{{ $data -> product_name}}</td>
        </tr>

        <tr>
            <td>Harga</td>
            <td>{{ $data -> product_price}}</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection
