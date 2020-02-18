<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'name','username','password', 'role','profile','active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function getAuthPassword()
    {
      return $this->password;
    }

}
