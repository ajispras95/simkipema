<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laporan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'tanggal_kegiatan', 'periode','status', 
    ];
}
