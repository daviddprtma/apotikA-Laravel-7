@extends('layouts.conquer')
@section('content')

    <div class="container">
        <h2>Obat Termahal </h2>

        <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($result as $r)
                <tr>
                  <td>{{$r->name}}</td>
                </tr>
            @endforeach
            </tbody>
          </table>    
    </div>
@endsection