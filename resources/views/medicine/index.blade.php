@extends('layouts.conquer')
@section('content')

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
<<<<<<< HEAD
  

  <div class="container">
    <h2>Daftar Obat Menggunakan Grid table bootstrap</h2>
=======


  <div class="container">
    <h2>Daftar Obat</h2>
    <p>Berikut ini adalah daftar kategori yang ada di ApotekU</p>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
    <div class="page-toolbar">
      <a href="{{url('medicines/create')}}" class="btn btn-info" type="button">
        + Tambah Medicine</a>
    </div>
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
<<<<<<< HEAD
            
=======

>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
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
              <td>{{ $d -> category_id}}</td>
              <td>
                <a class='btn btn-info' href="{{url('medicines/'.$d->id)}}"
<<<<<<< HEAD
                   data-target="#show{{$d->id}}" data-toggle='modal'>detail</a>        
=======
                   data-target="#show{{$d->id}}" data-toggle='modal'>detail</a>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
                <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                  <div class="modal-dialog">
                   <div class="modal-content">
                     <!-- put animated gif here -->
                     <img src="{{ asset('assets/img/ajax-modal-loading.gif')}}" alt="" class="loading">
                   </div>
                  </div>
                </div>
              </td>
              <td>
                @can('change-medicine', $d)
                <form method="POST" action="{{url('medicines/'.$d->id)}}">
                @csrf
                @method("PUT")
                <a href="{{url('medicines/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
<<<<<<< HEAD
                </form>             
                @endcan
              </td>
              
=======
                </form>
                @endcan
              </td>

>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
              <td>
                @can('delete-permission', $d)
                <form method="POST" action="{{url('medicines/'.$d->id)}}">
                  @csrf
                  @method("DELETE")
                  <input type="submit" value="delete" class="btn btn-danger"
                  onclick="if(!confirm('are you sure you want to delete this {{$d->name}}?')) return false;">
                </form>
                @endcan
              </td>
<<<<<<< HEAD
          </tr>    
=======
          </tr>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
          @endforeach
      </tbody>
    </table>
  </div>
<<<<<<< HEAD
  

  <div class="container">
    <h2>Daftar Obat</h2>
     <div class="row">
        @foreach($data as $d)
        <div class="col-md-3" style="text-align: center; border: 1px solid grey; margin: 5px; 
=======


  {{-- <div class="container">
    <h2>Daftar Obat</h2>
     <div class="row">
        @foreach($data as $d)
        <div class="col-md-3" style="text-align: center; border: 1px solid grey; margin: 5px;
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
              padding: 5px; border-radius: 10px; ">
            <img src="{{asset('assets/images/'.$d->image) }}"
             height="160px" /> <br>
             <a href="/medicines/{{$d->id}}">
<<<<<<< HEAD
              <b>{{$d->name}}</b> 
              <br>
              {{$d->form}}
             </a>    
        </div>
        @endforeach
      </div>
  </div>
@endsection
=======
              <b>{{$d->name}}</b>
              <br>
              {{$d->form}}
             </a>
        </div>
        @endforeach
      </div>
  </div> --}}
@endsection
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
