<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function user($value='')
    {
        return $this->belongsTo(User::class);
    }
}
