<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'social',
    ];

    public $timestamps = false;

    public function aspects()
    {
        return $this->belongsToMany('App\Models\Aspect', 
                                    'aspect_training_type', 
                                    'training_type_id', 'aspect_id');
    }
}
