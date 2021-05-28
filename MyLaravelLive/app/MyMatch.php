<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyMatch extends Model
{
    protected $table = 'MyMatches'
    protected $fillable = {
        'team1',
        'team2',
        'point1',
        'point2',
        'result',
    }
}
