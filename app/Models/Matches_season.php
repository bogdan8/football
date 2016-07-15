<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches_season extends Model
{

    protected $table = 'matches_season';

    public function racing_circles()
    {
        return $this->hasMany('App\Models\Racing_circles');
    }

    public function getActive()
    {
        return $this->published()->get();
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
