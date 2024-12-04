<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalDocument extends Model
{
    protected $guarded = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
