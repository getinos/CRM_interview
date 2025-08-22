<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'stage_id'];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
}
