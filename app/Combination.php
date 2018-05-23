<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    /**
     * @var string
     */
    protected $table = "combinations";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'project_id',
        'value',
        'total_process_min',
        'total_process_current',
        'total_process_max',
        'total_risk_min',
        'total_risk_current',
        'total_risk_max',
        'total_team_min',
        'total_team_current',
        'total_team_max',
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
