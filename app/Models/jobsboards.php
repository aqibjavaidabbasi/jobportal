<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobsboards extends Model
{
     // use HasFactory;
     protected $table = 'job_portal';
     protected $primaryKey = 'id';
     protected $fillable = ['company', 'location','title', 'category', 'jobd', 'qf', 'jobt', 'gender', 'vacancy', 'salary', 'ad', 'joind'];
 
     // protected $encryptable=[
     //     'name', 'email','is_admin', 'password'
     // ];
}
