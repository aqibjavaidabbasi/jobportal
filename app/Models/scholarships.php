<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scholarships extends Model
{
    // use HasFactory;

    protected $table = 'company_scholarship';
    protected $primaryKey = 'id';
    protected $fillable = ['title','name', 'field','NOS', 'tg', 'inclusions', 'eligibility', 'instructions', 'deadline', 'joining_date', 'address'];
}
