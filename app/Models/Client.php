<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";
    protected $guarded = [];

    public function items(){
        return $this->belongsTo(Item::class);
    }
}
