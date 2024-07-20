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

    public function product()
    {
        return $this->belongsTo(product::class, 'id', 'm_product_detail_id');
    }
    protected $fillable = [
        'sub_name',
        'm_product_id',
        'varians',
        'price'
    ];
    protected $table = 'm_product_details';
}
