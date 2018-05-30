<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * @var string
     */
    protected $table = "sources";

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
        'title' => 'required|string',
    ];

    /**
     * Get processes
     */
    public function processes()
    {
        return $this->hasMany('App\Process','source_id');
    }
}
