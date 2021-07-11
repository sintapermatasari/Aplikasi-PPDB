@extends('daftar.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pendaftaran Peserta DIdik Baru SMK Semangat 45</h2>
        </div>
        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('daftar.index') }}">back</a>
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
   
<form action="{{ route('daftar.update',$daftar->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
           
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" value="{{ $daftar->nama }}" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <select class="form-control" data-validate = "Jenis Kelamin" value="{{ $daftar->jk}}" name="jk" id="jk">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Laki-Laki" @if($daftar->jk == 'Laki-Laki')selected @endif>Laki-Laki</option>
                            <option value="Perempuan" @if($daftar->jk == 'Perempuan')selected @endif>Perempuan</option>
                     </select>
            </div>
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat">{{ $daftar->alamat}}</textarea>
            </div>
            <div class="form-group">
                <strong>Agama:</strong>
                <select class="form-control" data-validate = "Agama" name="agama" id="agama">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Islam" @if($daftar->agama == 'Islam')selected @endif>Islam</option>
                            <option value="Kristen Katolik" @if($daftar->agama == 'Kristen Katolik')selected @endif>Kristen Katolik</option>
                            <option value="Kristen Protestan" @if($daftar->agama == 'Kristen Protestan')selected @endif>Kristen Protestan</option>
                            <option value="Hindu" @if($daftar->agama == 'Hindu')selected @endif>Hindu</option>
                            <option value="Buddha" @if($daftar->agama == 'Buddha')selected @endif>Buddha</option>
                            <option value="Konghuchu" @if($daftar->agama == 'Konghuchu')selected @endif>Konghuchu</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Asal SMP:</strong>
                <input type="text" name="asalsmp" value="{{ $daftar->asalsmp}}" class="form-control" placeholder="Asal SMP">
            </div>
            <div class="form-group">
                <strong>Jurusan:</strong>
                <select class="form-control" data-validate = "Jurusan" name="jurusan" id="jurusan">
                            <option value=""disable selected > Pilih Opsi  </option>
                            <option value="Rekayasa Perangkat Lunak" @if($daftar->jurusan == 'Rekayasa Perangkat Lunak')selected @endif>Rekayasa Perangkat Lunak</option>
                            <option value="Tata Boga" @if($daftar->jurusan == 'Tata Boga')selected @endif>Tata Boga</option>
                            <option value="Tata Busana" @if($daftar->jurusan == 'Tata Busana')selected @endif>Tata Busana</option>
                            <option value="Multimedia" @if($daftar->jurusan == 'Multimedia')selected @endif>Multimedia</option>
                           
                </select>
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection