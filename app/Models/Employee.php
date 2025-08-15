<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'company_id', 'name', 'phone', 'hire_date', 'active',
        'payment_type', 'commission_percentage', 'fixed_amount_per_wash', 'monthly_salary'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function washes()
    {
        return $this->hasMany(Wash::class);
    }
}

