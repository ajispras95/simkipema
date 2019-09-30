<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekap_Prestasi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Rekap_Prestasi';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_peserta', 'nama_organisasi', 'nama_kegiatan', 'Juara', 'nama_lomba', 'tanggal_kegiatan', 'angkatan', 
    ];
}
