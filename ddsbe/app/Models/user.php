<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;


class User extends Model {

    public $timestamps = false;

    protected $table = 'site1';

    protected $fillable = [
        'username', 'password'
    ];
}
