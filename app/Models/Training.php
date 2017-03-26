<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'intensity', 'date', 'duration', 'training_type_id', 'user_id',
        'training_aspect_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function trainingAspects()
    {
        return $this->hasMany('App\Models\TrainingAspect');
    }
}
