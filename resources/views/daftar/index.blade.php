@extends('daftar.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Pendaftaran Peserta Dididk Baru SMK Semangat 45</h2>
            </div>

            <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('landingpage') }}">back</a>
            </div>
            <br>
            <br>
            <div class="pull-right">
            <a class="btn btn-success" href="{{ route('daftar.create') }}">Tambah Daftar Baru</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>NO Daftar</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat Lengkap</th>
        <th>Agama</th>
        <th>Asal SMP</th>
        <th>Jurusan</th>
    <th width="280px">Action</th>
    </tr>

    @foreach ($daftar as $daftar)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $daftar->nodaftar }}</td>
            <td>{{ $daftar->nama }}</td>
            <td>{{ $daftar->jk }}</td>
            <td>{{ $daftar->alamat }}</td>
            <td>{{ $daftar->agama }}</td>
            <td>{{ $daftar->asalsmp }}</td>
            <td>{{ $daftar->jurusan }}</td>
            <td>

            <form action="{{ route('daftar.destroy',$daftar->id) }}"  method="POST">

            <a class="btn btn-primary" href="{{ route('daftar.edit',$daftar->id) }}">Edit</a>

            <a href="{{route('daftar.cetak', $daftar->id)}}" class="btn btn-info">Print</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</button>
            </form>

            </td>
        </tr>

    @endforeach
</table>

@endsection