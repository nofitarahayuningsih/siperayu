<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_disposisi extends Model
{
    protected $fillable = [
    	'no_surat_masuk', 'tujuan', 'catatan', 'Y/m/d'
    ];
}
