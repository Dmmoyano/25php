<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message'
    ];
}
