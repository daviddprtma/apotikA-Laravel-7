@extends('layouts.conquer')
@section('content')

<h3 class="page-title">
    Welcome <small>Selamat Datang</small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="#">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Welcome</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#" onclick="showInfo()">
                <i class="icon-bulb"></a></i>
             </li>        
        </ul>
        <div class="page-toolbar">
            {{-- Tempat action button --}}
            <button class="btn btn-warning" data-toggle="modal" href="#disclaimer">Disclaimer</button>
            <button class="btn btn-info">Help</button>
        </div>
    </div>
            <div class="content">

                <div id='divShowInfo'></div>

                <div class="title m-b-md">
                    <strong style="color: red;">ApotekU</strong>
                </div>
                
                <div class="links">
                    <img src="{{asset('imageshome/apotik.png')}}" alt="">
                </div>

                <br>

                
                {{-- <a href="http://localhost:8000/products">
                    <button style="font-size: 24px;">Jenis Medicine Product</button>
                </a>

                
                <a href="http://localhost:8000/medicines">
                    <button style="font-size: 24px;">Medicine Category</button>
                </a>

                <a href="http://localhost:8000/categories">
                    <button style="font-size: 24px;">List Category</button>
                </a> --}}
            </div> 

            <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">DISCLAIMER</h4>
                      </div>
                      <div class="modal-body">
                        Pictures shown are for illustration purpose only.Actual may due to product enhancement.
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
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("medicines.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#divShowInfo').html(data.msg)
    }
  });
}
</script>
@endsection
