<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function diseases() {
        $this->hasMany(Disease::class);
    }
    public function research() {
        $this->hasMany(Research::class);
    }
}
