<?php

namespace App\Models\Admin;

use App\Models\FunFact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'philosophy',
        'contact_number',
        'image_path',
    ];

    public function funFacts()
    {
        return $this->hasMany(FunFact::class);
    }
}
