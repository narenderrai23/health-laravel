<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    use HasFactory;

    protected $fillable = [
        'section',
        'icon',
        'content',
    ];

    // Accessor for content attribute to automatically decode JSON
    public function getContentAttribute($value)
    {
        return json_decode($value, true);
    }

    // Mutator for content attribute to automatically encode array to JSON
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value);
    }
}
