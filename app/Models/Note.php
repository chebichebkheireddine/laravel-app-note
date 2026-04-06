<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Make fillable fields
    protected $fillable = ['title', 'content', 'author', 'discrission'];
}