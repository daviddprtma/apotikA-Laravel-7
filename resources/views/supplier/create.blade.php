@extends('layouts.conquer')
@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
     </div>
@endif


<form role="form" method="POST" action="{{url('suppliers')}}">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="namaSupplier" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" name="alamatSupplier" required></textarea>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{url('suppliers')}}" class="btn btn-default" type="button">
           Cancel</a>
    </div>
</form>
@endsection