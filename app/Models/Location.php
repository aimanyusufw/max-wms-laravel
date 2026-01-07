<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $fillable = ['warehouse_id', 'code', 'note', "zone_name", "aisle", "row", "level", "is_active", 'type'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
