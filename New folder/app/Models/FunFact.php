<?php

namespace App\Models;

use App\Models\Admin\About;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FunFact extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'count',
        'title',
    ];
}
