<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Nouveau message</p>
  <ul>
    <li>Nom : {{ $first_name }} {{ $last_name }}</li>
    <li>Email : {{ $email }}</li>
  </ul>
  <p>{{ $msg }}</p>
</body>
</html>