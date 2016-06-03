<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches_played extends Model
{
    protected $table = 'matches_played';

    public function adult()
    {
        return $this->belongsTo('App\Models\Adult');
    }

    public function getActive()
    {
        return $this->get();
    }

}
