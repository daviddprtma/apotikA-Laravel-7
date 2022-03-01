<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jenis-Jenis Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Obat Dari Satu Kategori</h2>
  <p>Berikut ini adalah daftar obat dari satu kategori yang ada di David Medicine Store</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>form</th>
        <th>formula</th>
        <th>price</th>
        <th>description</th>
        <th>category_id</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> name}}</td>
            <td>{{ $d -> form}}</td>
            <td>{{ $d -> formula}}</td>
            <td>{{ $d -> price}}</td>
            <td>{{ $d -> description}}</td>
            <td>{{ $d -> category_id}}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
