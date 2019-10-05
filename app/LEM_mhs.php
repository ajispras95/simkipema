<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LEM_mhs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'LEM_mhs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'kategori', 'tanggal', 'tempat','status', 
    ];
}
