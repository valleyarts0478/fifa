<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['team_id', 'number', 'p_name'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
