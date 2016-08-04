<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browsing_history_people_day_in_month_school extends Model
{

    protected $table = 'browsing_history_people_day_in_month_school';

    public function browsing_history()
    {
        return $this->belongsTo('App\Models\Browsing_history');
    }

    public function adult()
    {
        return $this->belongsTo('App\Models\Adult');
    }

    public function browsing_history_people_day_school()
    {
        return $this->hasMany('App\Models\Browsing_history_people_day_school');
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
