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
        'nama', 'nomor', 'email', 'alamat', 'jenis_kelamin', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ["role_text"];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleTextAttribute()
    {
        switch ($this->role) {
            case "1":
                return "Admin";
            case "2":
                return "Koordinator KWU";
            case "3":
                return "Dosen Pengajar";
            case "4":
                return "Mahasiswa";
            case "5":
                return "User Umum";
            case "6":
                return "Rektor";
        }
    }
}
