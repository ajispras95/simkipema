<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumentasi_internal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dokumentasi_internal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'Juara', 'tanggal_kegiatan', 'Angkatan','Status', 
    ];
}
