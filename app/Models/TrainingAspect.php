<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingAspect extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'training_id', 'aspect_id', 'value',
    ];

    public function training()
    {
        return $this->belongsTo('App\Models\Training');
    }

    public function aspect()
    {
        return $this->belongsTo('App\Models\Aspect');
    }
}
