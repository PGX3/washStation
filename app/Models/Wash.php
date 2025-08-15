<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wash extends Model
{
    protected $fillable = [
        'company_id',
        'employee_id',
        'wash_type_id',
        'schedule_at',
        'customer_name',
        'price',
        'status'
    ];

    protected $casts = [
        'schedule_at' => 'datetime', // <- Isso transforma a string em Carbon
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function washType()
    {
        return $this->belongsTo(WashType::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
