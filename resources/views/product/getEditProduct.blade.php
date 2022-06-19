<form role="form" method="POST" action="{{url('products/'.$data->id)}}">
    <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Product A</h4>
      </div>
    <div class="modal-body">
    @csrf
    @method("PUT")
    <div class="form-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Produk Obat</label>
            <input type="text" class="form-control" name="product_name" id="eNameProduk" value="{{$data->product_name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga Produk Obat</label>
            <input type="text" class="form-control" name="product_price" id="eHargaProduk" value="{{$data->product_price}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Kategori Obat</label>
            <select name="category_id" class="form-control" id="eKategoriProduk">
                @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Supplier</label>
            <select name="supplier_id" class="form-control" id="eSupplierProduk">
                @foreach ($sup as $s)
                    <option value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
          </div>

    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
        <a class="btn btn-default" type="button" data-dismiss="modal">
           Cancel</a>
    </div>
</div>
</form>