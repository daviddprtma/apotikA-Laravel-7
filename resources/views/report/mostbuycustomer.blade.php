@extends('layouts.conquer')
@section('content')

    <div class="container">
        <h2>Customer Dengan Pembelian Terbanyak</h2>

        <table class="table">
            <thead>
              <tr>
                <th>Pembeli</th>
                <th>Total Pembelian</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
              <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->totalpembeli}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
