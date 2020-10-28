<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @method static find($id)
 */
class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'doctor_type_id',
        'photo',
        'status'
    ];
    protected $attributes = [
        'status' => false
    ];

    public function doctorType() {
        return $this->belongsTo(DoctorType::class);
    }
}
