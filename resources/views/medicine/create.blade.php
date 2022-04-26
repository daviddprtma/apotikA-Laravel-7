@extends('layouts.conquer')
@section('content')

<form role="form" method="POST" action="{{url('medicines')}}">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="namaObat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Form</label>
            <input type="text" class="form-control" name="formObat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Formula</label>
            <input type="text" class="form-control" name="formulaObat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" name="priceObat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="descriptionObat" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kategori Obat</label>
            <select name="category_id" class="form-control">
                @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="faskes_1">
            <label class="form-check-label">
              Faskes 1
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="faskes_2">
            <label class="form-check-label">
              Faskes 2
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="faskes_3">
            <label class="form-check-label">
              Faskes 3
            </label>
        </div>

        <div class="form-group">
              <label for="exampleFormControlFile1">Masukkan Gambar</label>
              <input type="file" class="form-control-file" name="gambarObat">
        </div>
        
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a href="{{url('medicines')}}" class="btn btn-default" type="button">
           Cancel</a>
    </div>
</form>
@endsection