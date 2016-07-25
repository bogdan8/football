<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browsing_history_people extends Model
{

    protected $table = 'browsing_history_people';

    public function browsing_history()
    {
        return $this->belongsTo('App\Models\Browsing_history');
    }

    public function browsing_history_people_day()
    {
        return $this->hasMany('App\Models\Browsing_history_people_day');
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
