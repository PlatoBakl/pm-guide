<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    /**
     * @var string
     */
    protected $table = "process";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'source_id'
    ];
}
