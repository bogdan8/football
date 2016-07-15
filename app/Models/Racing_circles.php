<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Racing_circles extends Model
{

    protected $table = 'racing_circles';

    public function matches_season()
    {
        return $this->belongsTo('App\Models\Matches_season');
    }

    public function matches_tour()
    {
        return $this->hasMany('App\Models\Matches_tour');
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
