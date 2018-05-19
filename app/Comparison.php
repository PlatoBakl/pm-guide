<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Comparison extends Model
{
    /**
     * @var string
     */
    protected $table = "comparison";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'methodology_id', 'project_id', 'hamming', 'euclid'
    ];


    /**
     * Get methodology for this result.
     */
    public function methodology()
    {
        return $this->belongsTo('App\Methodology', 'methodology_id');
    }

    /**
     * Get project for this result.
     */
    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
