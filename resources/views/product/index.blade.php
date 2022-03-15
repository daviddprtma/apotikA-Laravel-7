@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Jenis Medicine Product beserta category</h2>
  <p>Berikut ini adalah jenis produk obat yang ada di David Medicine Store</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product_name</th>
        <th>product_price</th>
        <th>category_id</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td><a href="/products/{{ $d->id }}">{{ $d-> product_name}}</a></td>
            <td>{{ $d -> product_price}}</td>
            <td>{{ $d -> category_id}}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>

</div>
@endsection