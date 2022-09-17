<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    // use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','is_admin', 'password'];
}
