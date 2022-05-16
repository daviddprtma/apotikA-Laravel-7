<form role="form" method="POST" action="{{url('suppliers/'.$data->id)}}">
    <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Supplier A</h4>
      </div>
    <div class="modal-body">
    @csrf
    @method("PUT")
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="namaSupplier" id="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" rows="3" name="alamatSupplier" id="address">{{$data->address}}</textarea>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a class="btn btn-default" type="button" data-dismiss="modal">
           Cancel</a>
    </div>
</div>
</form>