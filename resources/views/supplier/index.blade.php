@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Supplier</h2>
  <p>Berikut ini adalah daftar supplier yang ada di ApotekU</p>
  <div class="page-toolbar">
      <a href="{{url('suppliers/create')}}" class="btn btn-info" type="button">
        + Tambah Supplier</a>
      {{-- <a href="#modalCreate" data-toggle="modal" class="btn btn-info" type="button">
        + Supplier Baru(modal)</a> --}}

        <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" >
              <form role="form" method="POST" action="{{url('suppliers')}}">
              <div class="modal-header">
                <button type="button" class="close"
                  data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add New Supplier</h4>
              </div>
              <div class="modal-body">
                  @csrf
                  <div class="form-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="text" class="form-control" id="name" name="namaSupplier" required>
                      </div>
                      <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" rows="3" id="address" name="alamatSupplier" required></textarea>
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

        <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" id="modalContent" >
              <div style="text-align: center;">
              <img src="{{asset('assets/img/icon-loading-bar.gif')}}" alt="">
              </div>
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
        <th>name</th>
        <th>address</th>
        <th>logo</th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr id="tr_{{$d->id}}">
            <td>{{ $d -> id }}</td>
            <td class="editable" id="td-name-{{$d->id}}">{{ $d-> name}}</td>
            <td class="editable" id="td-address-{{$d->id}}">{{ $d -> address}}</td>
            <td>
              <img src="{{asset('images/'.$d->logo)}}" height="40px">

              <div class="modal fade" id="modalChange_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content" >
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{route('supplier.changeLogo')}}">
                    <div class="modal-header">
                      <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title">Ganti Logo untuk {{$d->name}}</h4>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
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
              <a href="{{url('suppliers/'.$d->id.'/edit')}}" class="btn btn-xs btn-warning">edit</a>
              <a href="#modalEdit" data-toggle="modal" class="btn btn-warning btn-xs"
              onclick="getEditForm({{$d->id}})">
                + Edit A</a>
              <a href="#modalEdit" data-toggle="modal" class="btn btn-warning btn-xs"
              onclick="getEditForm2({{$d->id}})">
                + Edit B</a>
              <a href="#modalChange_{{$d->id}}" data-toggle="modal" class="btn btn-xs btn-default">
                Ganti Logo</a>
            </td>
            <td>
              @can('delete-permission', $d)
              <form method="POST" action="{{url('suppliers/'.$d->id)}}">
                @csrf
                @method("DELETE")
                <input type="submit" value="delete" class="btn btn-xs btn-danger"
                onclick="if(!confirm('are you sure you want to delete this {{$d->name}}?')) return false;">
                <a class="btn btn-danger btn-xs" onclick="if(confirm('are you sure you want to delete this {{$d->name}}?')) deleteDataRemoveTR({{$d->id}})" >
                  Delete 2</a>
              </form>
              @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('javascript')
<script>
function getEditForm(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("supplier.getEditForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       $('#modalContent').html(data.msg)
    }
  });
}

function getEditForm2(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("supplier.getEditForm2")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id
         },
    success: function(data){
       $('#modalContent').html(data.msg)
    }
  });
}

function saveDataUpdateTD(id)
{
  var eName = $('#eName').val();
  var eAddress = $('#eAddress').val();
  $.ajax({
    type:'POST',
    url:'{{route("supplier.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
          'id':id,
          'namaSupplier':eName,
          'alamatSupplier':eAddress
         },
    success: function(data){
       if(data.status=='oke'){
         alert(data.msg)
         $('#td_name_'+id).html(eName);
         $('#td_address_'+id).html(eAddress);
       }
    }
  });
}

function deleteDataRemoveTR(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("supplier.deleteData")}}',
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

@section('initialscript')
<script>
$('.editable').editable({
  closeOnEnter:true,
  callback:function(data){
    if(data.content){
      // alert(data.content)

      var s_id = data.$el[0].id
      var fname =s_id.split('-')[1]
      var id = s_id.split('-')[2]

      $.ajax({
      type:'POST',
      url:'{{route("supplier.saveDataField")}}',
      data:{'_token':'<?php echo csrf_token() ?>',
          'id':id,
          'fname':fname,
          'value':data.content
         },
      success: function(data){
       alert(data.msg);
      }
      });
    }
  }
});
</script>
@endsection
