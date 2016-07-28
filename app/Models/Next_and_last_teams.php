<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Next_and_last_teams extends Model
{
    protected $table = 'next_and_last_teams';

    public function next_and_last_matches()
    {
        return $this->belongsTo('App\Models\Next_and_last_matches');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function getActive()
    {
        return $this->get();
    }


}
