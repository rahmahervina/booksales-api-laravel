<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
            <th>Deskripsi</th>
        </tr>
        @foreach($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['nama'] }}</td>
            <td>{{ $genre['deskripsi'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>