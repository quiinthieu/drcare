<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'subtitle',
        'author',
        'content',
        'published_at'
    ];

    public function diseaseType() {
        $this->belongsTo(DiseaseType::class);
    }
}
