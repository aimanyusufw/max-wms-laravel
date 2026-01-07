<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackingListItem extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = ['packing_list_id', 'product_id', 'qty'];
}
