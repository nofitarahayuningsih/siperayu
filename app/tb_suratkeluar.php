<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_suratkeluar extends Model
{
    protected $fillable = [
    	'no_surat_keluar','no_agenda', 'Y/m/d', 'asal', 'perihal', 'tujuan', 'petugas', 'file'
    ];
}
