<div class="portlet">
    <h1>INVOICE</h1>
        <div class="portlet-title">
            <b>Pemesanan dari transaksi kode: {{ $transaction->id }}</b><br>
            <b>Tanggal Pemesanan: {{$transaction->transaction_date}}</b>
        </div>
        <div class="portlet-body">
            <div class="row">
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
           @foreach($transaction->medicines as $dp)
            <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        @php
                            $image = 'assets/images/'.$dp->image;
                            $imageData = base64_encode(file_get_contents($image));
                            $src = 'data:'.mime_content_type($image). ';base64,' . $imageData;
                        @endphp 
                        <img src="{{ $src }}" width="100" height="100">
                    </div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{$dp->name}}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">Rp {{$dp->price}}</td>
            <td data-th="Quantity">
                {{$dp->pivot->quantity}}
            </td>
            <td data-th="Subtotal" class="text-center">Rp. {{$dp->price * $dp->pivot->quantity}}</td>
            <td class="actions" data-th="">
            </td>
        </tr>
            @endforeach
        </tbody>
        <tfoot>
         <tr class="visible-xs">
            <td class="text-center"><strong>Total: Rp.{{$transaction->total}}</strong></td>
        </tr>
        </tfoot>
    </table>
        </div>
    </div>
</div>
