@extends('daftar.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pendaftaran Peserta Didik Baru SMK Semangat 45</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('landingpage') }}">back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('daftar.store') }}" method="POST">
    @csrf
  
     <div class="row">
           
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <select class="form-control" data-validate = "Jenis Kelamin" name="jk" id="jk">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                     </select>
            </div>
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
                <strong>Agama:</strong>
                <select class="form-control" data-validate = "Agama" name="agama" id="agama">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghuchu">Konghuchu</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Asal SMP:</strong>
                <input type="text" name="asalsmp" class="form-control" placeholder="Asal SMP">
            </div>
            <div class="form-group"> 
                <strong>Jurusan:</strong>
                <select class="form-control" data-validate = "Jurusan" name="jurusan" id="jurusan">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Tata Boga">Tata Boga</option>
                            <option value="Tata Busana">Tata Busana</option>
                            <option value="Multimedia">Multimedia</option>
                     </select>
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection