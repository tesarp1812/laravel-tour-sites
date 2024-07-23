<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class product_details extends Model
{
    use HasFactory;
    // use SoftDeletes; 
    // public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(product::class, 'id', 'm_product_detail_id');
    }
    protected $fillable = [
        'sub_name',
        'm_product_id',
        'varians',
        'price',
        'image'
    ];
    protected $table = 'm_product_details';
    protected $keyType = 'string'; // UUIDs are strings
    public $incrementing = false;

   // Generate a UUID for new products
   protected static function boot()
   {
       parent::boot();

       static::creating(function ($product_details) {
        $product_details->id = (string) Str::uuid();
       });
   }
}
