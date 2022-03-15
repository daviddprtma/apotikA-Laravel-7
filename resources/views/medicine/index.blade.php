@extends('layouts.conquer')
@section('content')

  <div class="container">
    <h2>Daftar Obat Menggunakan Grid table bootstrap</h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>form</th>
          <th>formula</th>
          <th>gambar</th>
          <th>price</th>
          <th>description</th>
          <th>category_id</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($data as $d)
          <tr>
              <td>{{ $d -> id }}</td>
              <td>{{ $d-> name}}</td>
              <td>{{ $d -> form}}</td>
              <td>{{ $d -> formula}}</td>
              <td>
              <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/'.$d->image) }}"
                     height="160px" />
                </div>
              </div>
              </td>
              <td>{{ $d -> price}}</td>
              <td>{{ $d -> description}}</td>
              <td>{{ $d -> category_id}}</td>
          </tr>    
          @endforeach
      </tbody>
    </table>
  </div>
  

  <div class="container">
    <h2>Daftar Obat</h2>
     <div class="row">
        @foreach($data as $d)
        <div class="col-md-3" style="text-align: center; border: 1px solid grey; margin: 5px; 
              padding: 5px; border-radius: 10px; ">
            <img src="{{asset('assets/images/'.$d->image) }}"
             height="160px" /> <br>
             <a href="/medicines/{{$d->id}}">
              <b>{{$d->name}}</b> 
              <br>
              {{$d->form}}
             </a>    
        </div>
        @endforeach
      </div>
  </div>
@endsection