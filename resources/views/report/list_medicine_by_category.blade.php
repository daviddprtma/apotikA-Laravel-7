<div class="container">
    <h2>List Medicine by category</h2>
    <p>ID Category: {{ $id_category}} with name: {{$nameCategory}}</p>
    <br>
    <p>Total rows: {{$getTotalData}}</p>

    <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Bentuk</th>
            <th>Formula</th>
            <th>Foto</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach($result as $d)
          <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->form}}</td>
            <td>{{$d->formula}}</td>
            <td>
              <img src="{{asset('assets/images/'.$d->image) }}"
               height="100px" />
            </td>
            <td>{{$d->price}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>    
</div>