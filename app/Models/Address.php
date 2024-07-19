<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'table_id',
        'first_name',
        'last_name',
        'phone',
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function meja() {
        return $this->belongsTo(Meja::class, 'table_id');
    }

    public function getFullNameAttribute() {
        return "{$this->first_name} {$this->last_name}";
    }
}
