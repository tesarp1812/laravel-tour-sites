<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class travel_pack extends Model
{
    use HasFactory;
    // use SoftDeletes; // Use SoftDeletes library
    public $timestamps = true;
    protected $fillable = [
        'min_pax',
        'max_pax',
        'price'
    ];
    protected $table = 'm_travel_packs';

    protected $keyType = 'string'; // UUIDs are strings
    public $incrementing = false;

    // Generate a UUID for new trips
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($trips) {
            $trips->id = (string) Str::uuid();
        });
    }
}
