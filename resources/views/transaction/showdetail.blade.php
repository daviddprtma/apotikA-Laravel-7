<table class='table table-bordered'>
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
    @foreach($medicines as $m)
    <tr>
        <td>
            {{$m->name}}
        </td>
        <td>
            {{$m->price}}
        </td> 
        <td>
            {{$m->pivot->quantity}} 
        </td> 
        <td>
            {{$m->pivot->quantity * $m->price}}
        </td>
    </tr>
    @endforeach
    </table>