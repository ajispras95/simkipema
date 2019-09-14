<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanAkademik extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kegiatan_akademik';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'kategori', 'tanggal', 'tempat','status', 
    ];
}
