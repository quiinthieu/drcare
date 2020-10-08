<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_type_id',
        'first_name',
        'last_name',
        'phone',
        'date',
        'time',
        'message'
    ];
    /**
     * @var mixed
     */

//    protected $casts = [
//        'service_type_id' => 'integer',
//        'date' => 'date'
//    ];

    public function setServiceTypeId($value) {
        $this->attributes['service_type_id'] = intval($value);
    }
    public function setDate($value) {
        $this->attributes['date'] = Carbon::parse($value);
    }
    public function setTime($value) {
        $this->attributes['time'] = Carbon::parse($value);
    }

    public function serviceType() {
        $this->belongsTo(ServiceType::class);
    }
}
