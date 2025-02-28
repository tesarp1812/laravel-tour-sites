<?php

namespace App\Models;

use App\Http\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class product extends Model
{
    use HasFactory;
    // use SoftDeletes; // Use SoftDeletes library
    // public $timestamps = true;

    public function details()
    {
        return $this->hasMany(product_details::class, 'm_product_id', 'id');
    }

    protected $fillable = [
        'name',
        'description', 
    ];
    protected $table = 'm_products';
    protected $keyType = 'string'; // UUIDs are strings
    public $incrementing = false;

    // Generate a UUID for new products
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->id = (string) Str::uuid();
        });
    }
}
