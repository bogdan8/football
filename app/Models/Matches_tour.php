<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches_tour extends Model
{

    protected $table = 'matches_tour';

    public function racing_circles()
    {
        return $this->belongsTo('App\Models\Racing_circles');
    }

    public function matches_played()
    {
        return $this->hasMany('App\Models\Matches_played');
    }

    public function start_matches()
    {
        return $this->hasMany('App\Models\Start_matches');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
