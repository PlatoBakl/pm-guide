<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Methodology extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @var string
     */
    protected $table = "methodologies";

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
        'name' => 'required|string',
    ];

    /**
     * Get answers for methodology's questionnaire
     */
    public function answers()
    {
        return $this->hasMany('App\MethodologyAnswers');
    }
}
