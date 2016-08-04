<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Browsing_history_people_day_school extends Model
{

    protected $table = 'browsing_history_people_day_school';

    public function browsing_history_people_day_in_month_school()
    {
        return $this->belongsTo('App\Models\Browsing_history_people_day_in_month_school');
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
