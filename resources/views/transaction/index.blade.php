@extends('layouts.conquer')

@section('content')
<div class="container">
<<<<<<< HEAD
  <h2>Daftar Transaksi di David Medicine Store</h2>
=======
  <h2>Daftar Transaksi di ApotekU</h2>
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
<<<<<<< HEAD
        <th>Kasir</th>
=======
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
        <th>Tanggal</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
<<<<<<< HEAD
        <td>{{$d->buyer->name}}</td>
=======
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
        <td>{{$d->user->name}}</td>
        <td>{{$d->transaction_date}}</td>
        <td>
           <a class='btn btn-default' data-toggle='modal'
<<<<<<< HEAD
           href="#basic" 
           onclick="getDetailData2({{$d->id}});"
           >Detail</a>
        </td>
        
      </tr>
    @endforeach
    
=======
           href="#basic"
           onclick="getDetailData2({{$d->id}});"
           >Detail</a>
        </td>

      </tr>
    @endforeach

>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
    </tbody>
  </table>
</div>

<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">Detail Transaksi</h4>
        </div>
        <div class="modal-body" id='msg'>
            tes
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
    // function getDetailData(id) {
    // $.ajax({
    //     type:'POST',
    //     url:'{{route("transactions.showAjax")}}',
    //     data:'_token= <?php echo csrf_token() ?> &id='+id,
    //     success:function(data) {
    //         $("#msg").html(data.msg);
    //     }
    // });
    // }

    function getDetailData2(id) {
    $.ajax({
        type:'GET',
        url:'{{url("transactions/showDataAjax2")}}/'+id,
        success:function(data) {
            $("#msg").html(data.msg);
        }
    });
    }

</script>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
