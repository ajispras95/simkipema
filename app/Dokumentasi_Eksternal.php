<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi_Eksternal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dokumentasi_Eksternal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'Juara', 'tanggal_kegiatan', 'Angkatan','Status', 
    ];
}
