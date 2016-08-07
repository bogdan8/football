<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    public function report_tour()
    {
        return $this->belongsTo('App\Models\Report_tour');
    }

    public function report_goals()
    {
        return $this->hasMany('App\Models\Report_goals');
    }

    public function report_replacements()
    {
        return $this->hasMany('App\Models\Report_replacements');
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
