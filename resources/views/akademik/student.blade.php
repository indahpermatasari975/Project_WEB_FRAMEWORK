<!DOCTYPE html>
<html>
<head>
    <title>Data Students</title>
</head>
<body>

<h2>Data Students</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Email</th>
    </tr>

    @foreach($student as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama_lengkap }}</td>
        <td>{{ $mhs->prodi }}</td>
        <td>{{ $mhs->email }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>
