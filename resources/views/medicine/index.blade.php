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
                <a href="#detail_{{$d->id}}" data-toggle="modal">
                      <img src="{{asset('assets/images/'.$d->image) }}"
                       height="100px" /></a>
            
                      <div class="modal fade" id="detail_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">{{$d->name}} {{$d->form}}</h4>
                              </div>
                              <div class="modal-body">
                                      <img src="{{asset('assets/images/'.$d->image) }}" height='200px' />
                                      <br>
                                      <h2>Description: {{$d->description}}</h2>
                              </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                          </div>
                        </div>
                      </div>
              </td>
              <td>{{ $d -> price}}</td>
              <td>{{ $d -> description}}</td>
              <td>
                <a class='btn btn-info' href="{{url('medicines/'.$d->id)}}"
                   data-target="#show{{$d->id}}" data-toggle='modal'>detail</a>        
                <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                     <!-- put animated gif here -->
                     <img class="loading" src="assets/img/ajax-modal-loading.gif" alt="">
                   </div>
                  </div>
                </div>
              </td>
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