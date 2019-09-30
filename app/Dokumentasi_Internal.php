<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi_Internal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dokumentasi_Internal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'Juara', 'tanggal_kegiatan', 'Angkatan','Status', 
    ];
}
