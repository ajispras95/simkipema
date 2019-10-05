<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CENTRIS_mhs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kegiatan_eksternal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'kategori', 'tanggal', 'tempat','status', 'centris',''
    ];
}
