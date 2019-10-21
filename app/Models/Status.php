<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];

    public function user($value='')
    {
        return $this->belongsTo(User::class);
    }


}
