@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Supplier</h2>
  <p>Berikut ini adalah daftar supplier yang ada di David Medicine Store</p>
  <div class="page-toolbar">
      <a href="{{url('suppliers/create')}}" class="btn btn-info" type="button">
        + Tambah Supplier</a>
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
        <th>name</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> name}}</td>
            <td>{{ $d -> address}}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>
</div>
@endsection