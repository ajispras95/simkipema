<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'nimornip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function didalamkampus(){
        return $this->belongsTo(didalamkampus::class, 'didalamkampus_id');
    }
     /*
    * Method untuk yang mendefinisikan relasi antara model user dan model Role
    */  
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    /*
    * Method untuk menambahkan role (hak akses) baru pada user
    */ 
    public function putname($name)
    {
        if (is_string($name))
        {
            $name = name::wherename($name)->first();
        }
        return $this->nams()->attach($name);
    }
    /*
    * Method untuk menghapus role (hak akses) pada user
    */ 
    public function forgetname($name)
    {
        if (is_string($name))
        {
            $name = name::wherename($name)->first();
        }
        return $this->name()->detach($name);
    }
    /*
    * Method untuk mengecek apakah user yang sedang login punya hak akses untuk mengakses page sesuai rolenya
    */ 
    public function hasname($name)
    {
        foreach ($this->name as $name)
        {
            if ($name->role_name === $name) return true;
        }
            return false;
    }
}
