<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'weight'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Validation rules
     *
     * @var array
     */
    public $validationRules = [
        'question' => 'required|string',
        'weight' => 'float'
    ];

    /**
     * Get answer's for question
     */
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
