<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        't_name',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
