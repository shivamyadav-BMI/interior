<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function role()
    {
        return $this->belongsTo(User::class);
    }
}
