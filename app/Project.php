<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'type', 'objective', 'description', 'product', 'cost_limit'
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
        'title' => 'required|string|max:255',
        'type' => 'required|boolean',
        'objective' => 'required|string|max:255',
        'description' => 'required|string',
        'product' => 'string',
        'cost_limit' => 'float'
    ];

    /**
     * Get the user who created the project.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get methodologies comparison
     */
    public function comparison()
    {
        return $this->hasOne('App\Comparison');
    }
}
