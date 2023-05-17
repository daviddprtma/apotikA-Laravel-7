@extends('layouts.conquer')
@section('content')

    <div class="container">
        <h2>Obat Dengan Jumlah Pembelian Terbanyak</h2>

        <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Form</th>
                <th>Harga</th>
                <th>Jumlah Terbeli</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
              <tr>
                <td>{{$d->name}}</td>
                <td>{{$d->form}}</td>
                <td>{{$d->price}}</td>
                <td>{{$d->totalbeli}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
