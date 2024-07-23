<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'message'
    ];

    protected $keyType = 'string'; // UUIDs are strings
    public $incrementing = false;

    // Generate a UUID for new customer
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            $customer->id = (string) Str::uuid();
        });
    }
}
