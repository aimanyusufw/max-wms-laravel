<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;

    protected $fillable = ['product_id', 'warehouse_id', 'location_id', 'qty'];
}
