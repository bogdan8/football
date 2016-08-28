<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standings extends Model
{
    protected $table = 'standings';

    public function matches_season()
    {
        return $this->belongsTo('App\Models\Matches_season');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function firstSeason($season)
    {
        return $this->published()->where(['matches_season_id' => $season])->orderBy('points', 'desc')->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }
}
