<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class MethodologyAnswers extends Model
{
    /**
     * @var string
     */
    protected $table = "methodology_questionnaire";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;


    /**
     * Get methodology for this answer.
     */
    public function methodology()
    {
        return $this->belongsTo('App\Methodology', 'methodology_id');
    }
}
