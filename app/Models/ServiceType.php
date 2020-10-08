<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function services() {
        $this->hasMany(Service::class );
    }
    public function appointment() {
        $this->hasMany(Appointment::class);
    }
}
