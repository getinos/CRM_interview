<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    //
    protected $fillable = [
        'name',
        'order',
    ];

    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
}
