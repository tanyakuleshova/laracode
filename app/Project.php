<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'owner_id', 'color', 'type'
    ];

    public function owner(){
        return $this->belongsTo(User::class);
    }
}
