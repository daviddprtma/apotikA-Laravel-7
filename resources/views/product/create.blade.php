@extends('layouts.conquer')
@section('content')

<form enctype="multipart/form-data"
 role="form" method="POST" action="{{url('products')}}">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk Obat</label>
            <input type="text" class="form-control" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Harga Produk Obat</label>
            <input type="text" class="form-control" name="product_price" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Kategori Obat</label>
            <select name="category_id" class="form-control">
                @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Supplier</label>
            <select name="supplier_id" class="form-control">
                @foreach ($sup as $s)
                    <option value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>

    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{url('products')}}" class="btn btn-default" type="button">
           Cancel</a>
    </div>
</form>
@endsection