@extends('layouts.frontend')

@section('title', 'Cart')

@section('content')

<<<<<<< HEAD
=======
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


>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
            <?php $total=0; ?>
            @if (session('cart'))
            @foreach (session()->get('cart') as $id => $details)
            <?php $total+=$details['price']*$details['quantity'] ?>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <img src="{{asset('assets/images/'.$details['image'])}}" width="100" height="100">
                    </div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{$details['name']}}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">Rp {{$details['price']}}</td>
            <td data-th="Quantity">
                {{$details['quantity']}}
            </td>
            <td data-th="Subtotal" class="text-center">Rp. {{$details['price']*$details['quantity']}}</td>
            <td class="actions" data-th="">
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
        <tfoot>
        {{-- <tr class="visible-xs">
            <td class="text-center"><strong>Total: Rp.{{$total}}</strong></td>
        </tr> --}}
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs">
                <a href="{{route('submitcheckout')}}" class="btn btn-danger">
                <i class="fa fa-angle-right">Finish</i>
            </a></td>
            <td class="hidden-xs text-center"><strong>Total: Rp.{{$total}}</strong></td>
        </tr>
        </tfoot>
    </table>

@endsection