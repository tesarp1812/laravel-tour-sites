<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class travel_pack extends Model
{
    use HasFactory;
    use SoftDeletes; // Use SoftDeletes library
    public $timestamps = true;
    protected $fillable = [
        'min_pax',
        'max_pax',
        'price'
    ];
    protected $table = 'm_travel_packs';
}
