<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;

    protected $fillable = [

        'name' , 
        'description' , 
        'main_image' , 
        'relase_date' , 
        'repo_link' , 

    ];
}
