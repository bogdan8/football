<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team_peoples_position extends Model
{

    protected $table = 'team_peoples_position';

    public function team_peoples()
    {
        return $this->hasMany('App\Models\Team_peoples');
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
