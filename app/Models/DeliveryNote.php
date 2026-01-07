<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryNote extends Model
{
    use SoftDeletes;

    protected $fillable = ['sj_number', 'delivery_order_id', 'issue_date'];
}
