<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Daftar extends Model
{
    use AutoNumberTrait;
    protected $fillable = [
        'nama', 'jk', 'alamat', 'agama', 'asalsmp', 'jurusan'
    ];
    protected $table='daftar';

    public function getAutoNumberOptions()
    {
        return[
            'nodaftar'=>[
            'format'=>'?',
            'length'=>'4'
            ]
            ];
    }
}
