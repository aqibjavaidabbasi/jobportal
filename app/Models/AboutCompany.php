<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;
    protected $table = 'company_info';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','phone', 'type', 'address'];
}
