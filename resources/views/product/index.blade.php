@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Jenis Medicine Product beserta category</h2>
  <p>Berikut ini adalah jenis produk obat yang ada di David Medicine Store</p>
  
  <div class="page-toolbar">
    <a href="{{url('products/create')}}" class="btn btn-info" type="button">
      + Tambah Produk Obat</a>
  </div>

  <br>
  @if (session('status'))
  <div class="alert alert-success">
      {{session('status')}}
   </div>
  @endif
  <br>
  
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product_name</th>
        <th>product_price</th>
        <th>category_id</th>
        <th>supplier_id</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td><a href="/products/{{ $d->id }}">{{ $d-> product_name}}</a></td>
            <td>{{ $d -> product_price}}</td>
            <td>{{ $d -> category_id}}</td>
            <td>{{ $d -> supplier_id}}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>

</div>
@endsection