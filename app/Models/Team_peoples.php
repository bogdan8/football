<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team_peoples extends Model
{

    protected $table = 'team_peoples';

    public function team_peoples_position()
    {
        return $this->belongsTo('App\Models\Team_peoples_position');
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
