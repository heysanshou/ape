<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    //
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function gravatar($size = '128')
    {
        $rand = $this->id % 10;
        return "https://adminlte.io/themes/AdminLTE/dist/img/user{$rand}-{$size}x{$size}.jpg";
    }
}
