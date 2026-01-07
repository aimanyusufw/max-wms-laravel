<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackingList extends Model
{
    use SoftDeletes;

    protected $fillable = ['delivery_order_id'];

    public function items()
    {
        return $this->hasMany(PackingListItem::class);
    }
}
