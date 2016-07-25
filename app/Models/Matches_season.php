<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches_season extends Model
{

    protected $table = 'matches_season';

    public function racing_circles()
    {
        return $this->hasMany('App\Models\Racing_circles');
    }

    public function standings()
    {
        return $this->hasMany('App\Models\Standings');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function firstSeason($season)
    {
        return $this->published()->where('number_season', $season)->firstOrFail();
    }

    public function getSeasonTour($id)
    {
        return $this->published()->where(['id' => $id])->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
