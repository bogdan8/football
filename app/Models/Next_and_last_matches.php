<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Next_and_last_matches extends Model
{
    protected $table = 'next_and_last_matches';

    public function matches_tour()
    {
        return $this->belongsTo('App\Models\Matches_tour');
    }

    public function next_and_last_teams()
    {
        return $this->hasMany('App\Models\Next_and_last_teams');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function getNext()
    {
        return $this->published()->where(['next' => '1'])->first();
    }

    public function getLast()
    {
        return $this->published()->where(['last' => '1'])->first();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
