<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItem extends Model
{
    public $timestamps = false;

    protected $fillable = ['purchase_order_id', 'product_id', 'qty_ordered', 'qty_received'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
