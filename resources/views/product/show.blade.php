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
  <table class="table">
    <thead>
        <h2>Product Detail</h2>
      <tr>
        <th>Data</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $data -> id}}</td>
        </tr>
        
        <tr>
            <td>Nama</td>
            <td>{{ $data -> product_name}}</td>
        </tr>

        <tr>
            <td>Harga</td>
            <td>{{ $data -> product_price}}</td>
        </tr>
    </tbody>
  </table>

</div>

</body>
</html>
