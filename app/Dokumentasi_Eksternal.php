<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumentasi_eksternal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dokumentasi_eksternal';
    public $incrementing = false;

    public function user(){
        return $this->hasOne(User::class, 'dokumentasi_eksternal');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_organisasi', 'nama_kegiatan', 'juara', 'tanggal_kegiatan','angkatan','status', 
    ];
}
