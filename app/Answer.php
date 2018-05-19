<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'answer_id','answer'
    ];

    /**
     * @var string
     */
    protected $table = "question_answers";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;
    /**
     * Validation rules
     *
     * @var array
     */
    public $validationRules = [
        'question_id' => 'required|integer',
        'answer_id' => 'required|integer',
        'answer' => 'required|string',
    ];

    /**
     * Get question for this answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Question', 'question_id');
    }
}
