<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Welcome Profile!</h1>
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/profile') }}">Profile</a></li>
    <li><a href="{{ url('/siswa') }}">Siswa</a></li>
    <li><a href="{{ url('/kelas') }}">Kelas</a></li>
  </ul>
</body>

</html>