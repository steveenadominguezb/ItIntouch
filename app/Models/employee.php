<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class employee extends Authenticatable
{
    use HasFactory, Notifiable;

    public function setPassword($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
