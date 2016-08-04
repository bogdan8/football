<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{

    protected $table = 'adult';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function browsing_history_people_day_in_month_school()
    {
        return $this->hasMany('App\Models\Browsing_history_people_day_in_month_school');
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
