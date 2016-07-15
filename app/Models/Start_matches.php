<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Start_matches extends Model
{
    protected $table = 'start_matches';

    public function adult()
    {
        return $this->belongsTo('App\Models\Adult');
    }

    public function matches_tour()
    {
        return $this->belongsTo('App\Models\Matches_tour');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function getActiveAdult()
    {
        return $this->published()->where(['adult_id' => '1'])->get();
    }

    public function getActiveYoung()
    {
        return $this->published()->where(['adult_id' => '2'])->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
