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
  <h2>Daftar Category</h2>
  <p>Berikut ini adalah daftar kategori yang ada di David Medicine Store</p>            
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>category_name</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d -> id }}</td>
            <td>{{ $d-> category_name}}</td>
            <td>{{ $d -> description}}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
