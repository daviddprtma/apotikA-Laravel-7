<div class="row">
  <div class="col-md-12">

    <h2>Data Obat</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Data</th>
          <th>Hasil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Generic Name </td>
          <td>{{$data->name}}</td>
        </tr>
        <tr>
          <td>Form</td>
          <td>{{$data->form}}</td>
        </tr>
        <tr>
          <td>Formula</td>
          <td>{{$data->formula}}</td>
      </tr>
      <tr>
          <td>Category</td>
          <td>{{$data->category->category_name}}</td>
      </tr>
      <tr>
          <td>Harga</td>
          <td>{{$data->price}}</td>
      </tr>
      <tr>
          <td>Foto</td>
          <td>
            <img src="{{asset('assets/images/'.$data->image) }}"/>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>