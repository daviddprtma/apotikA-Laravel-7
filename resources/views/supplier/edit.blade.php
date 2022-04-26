@extends('layouts.conquer')
@section('content')

<form role="form" method="POST" action="{{url('suppliers/'.$data->id)}}">
    @csrf
    @method("PUT")
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="namaSupplier" required value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" name="alamatSupplier" required>{{$data->address}}</textarea>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{url('suppliers')}}" class="btn btn-default" type="button">
           Cancel</a>
    </div>
</form>
@endsection