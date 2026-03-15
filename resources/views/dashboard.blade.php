<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Digital</title>
</head>
<body>
    <h1>Dashboard Perpustakaan Digital</h1>
    
    <h3>Daftar Buku Tersedia:</h3>
    <ul>
        @foreach($dataBuku as $buku)
            <li>{{ $buku['judul'] }} - <strong>{{ $buku['penulis'] }}</strong></li>
        @endforeach
    </ul>
</body>
</html>