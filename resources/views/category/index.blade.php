@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Category</h2>
  <p>Berikut ini adalah daftar kategori yang ada di ApotekU</p>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>category_name</th>
        <th>description</th>
        <th>obat-obat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> category_name}}</td>
            <td>{{ $d -> description}}</td>
            <td>
              @foreach($d->medicines as $m)
                  {{$m->name}} ({{$m->form}})<br>
              @endforeach

              <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal'
                onclick='showProducts({{ $d->id }})'>Detail</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-wide">
       <div class="modal-content" id="showproducts">
         <!--loading animated gif can put here-->
         <img class="loading" src="assets/img/ajax-modal-loading.gif" alt="">
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<script>
function showProducts(category_id)
{
  $.ajax({
    type:'GET',
    url:'{{url("report/listmedicine/")}}'+"/"+category_id,
    data:{'_token':'<?php echo csrf_token() ?>',
          'category_id':category_id
         },
    success: function(data){
       $('#showproducts').html(data)
    }
  });
}
</script>
@endsection
