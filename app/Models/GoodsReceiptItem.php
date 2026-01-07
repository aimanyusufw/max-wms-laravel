<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoodsReceiptItem extends Model
{
    public $timestamps = false;

    protected $fillable = ['goods_receipt_id', 'product_id', 'location_id', 'qty_received'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
