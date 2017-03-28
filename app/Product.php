<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'short', 'body', 'image', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
