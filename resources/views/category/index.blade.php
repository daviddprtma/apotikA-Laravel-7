@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Category</h2>
<<<<<<< HEAD
  <p>Berikut ini adalah daftar kategori yang ada di David Medicine Store</p>            
=======
  <p>Berikut ini adalah daftar kategori yang ada di ApotekU</p>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
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
<<<<<<< HEAD
          </td>  
        </tr>    
=======
          </td>
        </tr>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
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
<<<<<<< HEAD
  </div>  
=======
  </div>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
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
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
