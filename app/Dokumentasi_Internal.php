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
    public $incrementing = false;

    public function user(){
        return $this->hasOne(User::class, 'dokumentasi_internal');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'juara', 'tanggal_kegiatan', 'angkatan','status', 
    ];
}
