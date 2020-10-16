<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'disease_type_id', 'description', 'statistics', 'causes', 'symptoms', 'preventions'];

    public function diseaseType() {
        return $this->belongsTo(DiseaseType::class);
    }
}
