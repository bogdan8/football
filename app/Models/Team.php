<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $table = 'team';

    public function adult()
    {
        return $this->belongsTo('App\Models\Adult');
    }

    public function standings()
    {
        return $this->hasMany('App\Models\Standings');
    }

    public function next_and_last_teams()
    {
        return $this->hasMany('App\Models\Next_and_last_teams');
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
