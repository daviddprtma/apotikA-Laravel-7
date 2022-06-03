@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
 </div>
@endif

{{-- <?php dd(session()->get('cart')) ?> --}}
    <div class="container products">

        <div class="row">
            @foreach ($product as $p)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{asset('assets/images/'.$p->image)}}" width="500" height="300">
                    <div class="caption">
                        <h4>{{$p->name}} <br>{{$p->form}}</h4>
                        <p>Formula: {{$p->formula}}</p>
                        <p>{{$p->description}}</p>
                        <p><strong>Price: </strong>{{$p->price}}</p>
                        <p class="btn-holder">
                            <a href="{{url('add-to-cart/'.$p->id)}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> 
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div><!-- End row -->

    </div>

@endsection