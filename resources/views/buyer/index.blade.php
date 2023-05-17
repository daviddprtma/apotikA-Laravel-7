@extends('layouts.conquer')
@section('content')

<div class="container">
  <h2>Daftar Pembeli</h2>
<<<<<<< HEAD
  <p>Berikut ini adalah daftar pembeli yang ada di David Medicine Store</p>            
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
=======
  <p>Berikut ini adalah daftar pembeli yang ada di ApotekU</p>
  <table class="table">
    <thead>
      <tr>
        <th>No Id User</th>
        <th>Nama</th>
        <th>Alamat Email</th>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
<<<<<<< HEAD
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> name}}</td>
            <td>{{ $d -> address}}</td>
        </tr>    
=======
            <td>{{ $d -> id}}</td>
            <td>{{ $d-> name}}</td>
            <td>{{ $d -> email}}</td>
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
=======
  </div>
</div>
@endsection
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
