<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Siswa Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center>
        <h3 class="h3">Formulir Siswa Baru SMK Semangat 45</h3>
    </center>

    <br>
    <table cellspacing="0" cellpadding="4">
        <tr>
            <th width="1%">No Daftar</th>
            <td align="right">:</td>
            <td>{{ $daftar->nodaftar }}</td>
        </tr>
        <tr>
            <th width="1%">Nama</th>
            <td align="right">:</td>
            <td>{{ $daftar->nama }}</td>
        </tr>
        <tr>
            <th width="1%">Jenis Kelamin</th>
            <td align="right">:</td>
            <td>{{ $daftar->jk=='L'?'Laki-laki':'Perempuan' }}</td>
        </tr>
        <tr>
            <th width="1%">Alamat</th>
            <td align="right">:</td>
            <td>{{ $daftar->alamat }}</td>
        </tr>
         <tr>
            <th width="1%">Agama</th>
            <td align="right">:</td>
            <td>{{ $daftar->agama }}</td>
        </tr>
        <tr>
            <th width="1%">Asal SMP</th>
            <td align="right">:</td>
            <td>{{ $daftar->asalsmp }}</td>
        </tr>
        <tr>
            <th width="1%">Jurusan</th>
            <td align="right">:</td>
            <td>{{ $daftar->jurusan }}</td>
        </tr>
    </table>
    <br>
    <br>
        <h6 align="right">Bertanda Tangan</h6>
        <br>
        <br>
        <br>
        <br>
        <h6 align="right">Bogor,- April 2021</h6>
</body>
</html>