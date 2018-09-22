<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_suratmasuk extends Model
{
    protected $fillable = [
    	'no_surat_masuk','no_agenda', 'Y/m/d', 'asal', 'perihal', 'tujuan', 'detail_surat', 'petugas', 'file'
    ];
}
