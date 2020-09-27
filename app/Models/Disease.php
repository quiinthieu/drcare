<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'info'];

    public function diseaseType() {
        return $this->belongsTo(DiseaseType::class);
    }
}
