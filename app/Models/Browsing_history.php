<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browsing_history extends Model
{

    protected $table = 'browsing_history';

    public function browsing_history_people_day_in_month()
    {
        return $this->hasMany('App\Models\Browsing_history_people_day_in_month');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function firstMounts($mounts)
    {
        return $this->published()->where('date_visit', $mounts)->firstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
