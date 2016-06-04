<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{

    protected $table = 'adult';

    public function matches_played()
    {
        return $this->hasMany('App\Models\Matches_played');
    }

    public function standings()
    {
        return $this->hasMany('App\Models\Standings');
    }

    public function team()
    {
        return $this->hasMany('App\Models\Team');
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
