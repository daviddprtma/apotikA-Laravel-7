@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Jenis Medicine Product beserta category</h2>
  <p>Berikut ini adalah jenis produk obat yang ada di David Medicine Store</p>
  
  <div class="page-toolbar">
    <a href="{{url('products/create')}}" class="btn btn-info" type="button">
      + Tambah Produk Obat</a>
    <a href="#modalCreate" data-toggle="modal" class="btn btn-info" type="button">
        + Tambah Produk Obat(Modal)</a>

    
        <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" >
              <form role="form" method="POST" action="{{url('products')}}">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add New Product</h4>
              </div>
              <div class="modal-body">
                  @csrf
                  <div class="form-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama Produk Obat</label>
                          <input type="text" class="form-control" id="pNama" name="product_name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Produk Obat</label>
                        <input type="text" class="form-control" id="pHarga" name="product_price" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Obat</label>
                        <select name="category_id" class="form-control" id="pKategori">
                            @foreach ($cat as $c)
                                <option value="{{$c->id}}">{{$c->category_name}}</option>
                            @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Supplier</label>
                      <select name="supplier_id" class="form-control" id="pSupplier">
                          @foreach ($sup as $s)
                              <option value="{{$s->id}}">{{$s->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalEditProduct" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" id="modalContent" >
              <div style="text-align: center;">
              <img src="{{asset('assets/img/icon-loading-bar.gif')}}" alt="">
              </div>
            </div>
          </div>

  </div>

  <br>
  @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
     </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
     </div>
  @endif
  <br>
 
  
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product_name</th>
        <th>product_price</th>
        <th>category_id</th>
        <th>supplier_id</th>
        <th>foto</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr id="tr_{{$d->id}}">
            <td>{{ $d -> id }}</td>
            <td id="td_product_name_{{$d->id}}"><a href="/products/{{ $d->id }}">{{ $d-> product_name}}</a></td>
            <td id="td_product_price_{{$d->id}}">{{ $d -> product_price}}</td>
            <td id="td_category_id_{{$d->id}}">{{ $d -> category_id}}</td>
            <td id="td_supplier_id_{{$d->id}}">{{ $d -> supplier_id}}</td>
            <td><img src="{{asset('images/'.$d->foto)}}" height="40px">
              <div class="modal fade" id="modalChange_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" >
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{route('product.changeFoto')}}">
                    <div class="modal-header">
                      <button type="button" class="close" 
                        data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title">Ganti Logo untuk {{$d->product_name}}</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <input type="hidden" id="id" name="id" value="{{$d->id}}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>            
            </td>
            <td>
            <a href="#modalEditProduct" data-toggle="modal" class="btn btn-warning btn-xs" 
              onclick="getEditProduct({{$d->id}})">
                + Edit A</a>
                
            <a href="#modalEditProduct" data-toggle="modal" class="btn btn-warning btn-xs" 
              onclick="getEditProduct2({{$d->id}})">
                + Edit B</a>
            <a href="#modalChange_{{$d->id}}" data-toggle="modal" class="btn btn-xs btn-default">
                  Ganti Logo</a>                                
            </td>
            <td>
              <form method="POST" action="{{url('products/'.$d->id)}}">
                @csrf
                @method("DELETE")
                <input type="submit" value="delete" class="btn btn-danger"
                onclick="if(!confirm('are you sure you want to delete this {{$d->product_name}}?')) return false;">
              </form>
            </td>
            <td>
              <a class="btn btn-danger btn-xs" onclick="if(confirm('are you sure you want to delete this {{$d->product_name}}?')) deleteDataRemoveTR({{$d->id}})" >
                  Delete 2</a>
            </td>
        </tr>    
        @endforeach
    </tbody>
  </table>

</div>
@endsection

@section('javascript')
<script>
function getEditProduct(id)
{
$.ajax({
type:'POST',
url:'{{route("product.getEditProduct")}}',
data:{'_token':'<?php echo csrf_token() ?>',
      'id':id
      },
success: function(data){
  $('#modalContent').html(data.msg)
}
});
}

function getEditProduct2(id)
{
$.ajax({
type:'POST',
url:'{{route("product.getEditProduct2")}}',
data:{'_token':'<?php echo csrf_token() ?>',
      'id':id
      },
success: function(data){
  $('#modalContent').html(data.msg)
}
});
}

function saveDataUpdateTDProduct(id)
{
  var eNameProduk2 = $('#eNameProduk2').val();
  var eHargaProduk2 = $('#eHargaProduk2').val();
  var eKategoriProduk2 = $('#eKategoriProduk2').val();
  var eSupplierProduk2 = $('#eSupplierProduk2').val();
  $.ajax({
    type:'POST',
    url:'{{route("product.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id,
          'product_name':eNameProduk2,
          'product_price': eHargaProduk2,
          'category_id':eKategoriProduk2,
          'supplier_id':eSupplierProduk2
         },
    success: function(data){
       if(data.status=='oke'){
         alert(data.msg)
         $('#td_product_name_'+id).html(eNameProduk2);
         $('#td_product_price_'+id).html(eHargaProduk2);
         $('#td_category_id_'+id).html(eKategoriProduk2);
         $('#td_supplier_id_'+id).html(eSupplierProduk2);
       }
    }
  });
}

function deleteDataRemoveTR(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("product.deleteData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       if(data.status=='oke'){
         alert(data.msg)
         $('#tr_'+id).remove();
       }
       else{
         alert(data.msg);
       }
    }
  });
}
</script>
@endsection