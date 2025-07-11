<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public function bookmaker()
    {
        return $this->belongsTo(Bookmaker::class);
    }
}
