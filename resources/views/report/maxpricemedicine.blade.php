@extends('layouts.conquer')
@section('content')

    <div class="container">
        <h2>Obat Termahal </h2>

        <table class="table">
            <thead>
              <tr>
                <th>Harga Obat termahal yaitu Rp.{{$result -> price}}</th>
              </tr>
            </thead>
          </table>    
    </div>
@endsection