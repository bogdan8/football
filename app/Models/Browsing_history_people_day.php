<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browsing_history_people_day extends Model
{

    protected $table = 'browsing_history_people_day';

    public function browsing_history_people_day_in_month()
    {
        return $this->belongsTo('App\Models\Browsing_history_people_day_in_month');
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
