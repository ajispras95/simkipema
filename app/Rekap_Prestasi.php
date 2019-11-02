<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekap_prestasi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rekap_prestasi';
    public $incrementing = false;

    public function user(){
        return $this->hasOne(User::class,'rekap_prestasi');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'juara', 'nama_lomba', 'tanggal_kegiatan', 'angkatan', 
    ];
}
