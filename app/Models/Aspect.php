<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'unit', 'training_type_id', 'training_aspect_id'
    ];

    public function trainingAspects()
    {
        return $this->hasMany('App\Models\TrainingAspect');
    }

    public function trainingTypes()
    {
        return $this->belongsToMany('App\Models\TrainingType', 
                                    'aspect_training_type', 
                                    'aspect_id', 'training_type_id');
    }
}
