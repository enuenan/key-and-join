<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $p)
        <tr>
          <td>{{ $p -> id }}</td>
          <td>{{ $p -> title }}</td>
          <td>{{ $p -> name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </body>
</html>
