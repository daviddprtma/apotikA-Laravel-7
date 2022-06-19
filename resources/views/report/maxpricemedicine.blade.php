@extends('layouts.conquer')
@section('content')

    <div class="container">
        <h2>Obat Termahal </h2>
        <p>Berikut ini adalah data obat termahal yang ada di ApotekU</p>
        <table class="table">
            <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th>Hasil</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Generic Name </td>
                        <td>{{$data->name}}</td>
                      </tr>
                      <tr>
                        <td>Form</td>
                        <td>{{$data->form}}</td>
                      </tr>
                      <tr>
                        <td>Formula</td>
                        <td>{{$data->formula}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$data->category->category_name}}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>{{$data->price}}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                          <img src="{{asset('assets/images/'.$data->image) }}"/>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              </div>
          </table>
    </div>
@endsection
