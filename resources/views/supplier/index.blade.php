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

  @if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
     </div>
  @endif
  <br>
  
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> name}}</td>
            <td>{{ $d -> address}}</td>
            <td><a href="{{url('suppliers/'.$d->id.'/edit')}}" class="btn btn-xs btn-warning">edit</a></td>
            <td>
              <form method="POST" action="{{url('suppliers/'.$d->id)}}">
                @csrf
                @method("DELETE")
                <input type="submit" value="delete" class="btn btn-xs btn-danger"
                onclick="if(!confirm('are you sure you want to delete this supplier?')) return false;">
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection