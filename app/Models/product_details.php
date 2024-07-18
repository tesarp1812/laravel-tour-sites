<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product_details extends Model
{
    use HasFactory;
    // use SoftDeletes; 
    public $timestamps = true;
    protected $fillable = [
        'sub_name',
        'm_product_id',
        'varians',
        'price'
    ];
    protected $table = 'm_product_details';
}
