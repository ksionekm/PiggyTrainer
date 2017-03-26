<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value', 'name', 'user_id', 'training_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function training()
    {
        return $this->hasOne('App\Models\Training');
    }
}
