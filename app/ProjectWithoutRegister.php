<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectWithoutRegister extends Model
{
    protected $fillable = [
        'title', 'description', 'color', 'type', 'author_name', 'author_phone'
    ];
}
