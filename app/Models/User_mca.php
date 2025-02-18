<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_mca extends Model
{
    use HasFactory;
    protected $table = 'userMca';
    protected $fillable = ['name','email','password'];
}
