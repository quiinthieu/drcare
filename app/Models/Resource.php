<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'resource_type_id'
    ];

    public function resourceType() {
        return $this->belongsTo(ResourceType::class);
    }
}
