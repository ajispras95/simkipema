<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class di_luar_kampus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'di_luar_kampus';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kegiatan', 'dosen_pembimbing', 'program_kerja_divisi', 'predikat', 'waktu_pelaksanaan', 'tempat','tingkat', 'scan_bukti',
    ];
}
