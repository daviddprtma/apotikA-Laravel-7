@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Category</h2>
  <p>Berikut ini adalah daftar kategori yang ada di David Medicine Store</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>category_name</th>
        <th>description</th>
        <th>obat-obat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> category_name}}</td>
            <td>{{ $d -> description}}</td>
            <td>
              @foreach($d->medicines as $m)
                  {{$m->name}} ({{$m->form}})<br>
              @endforeach
          </td>  
        </tr>    
        @endforeach
    </tbody>
  </table>
</div>
@endsection