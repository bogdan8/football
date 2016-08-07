<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report_tour extends Model
{
    protected $table = 'report_tour';

    public function matches_season()
    {
        return $this->belongsTo('App\Models\Matches_season');
    }

    public function report()
    {
        return $this->hasMany('App\Models\Report');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function oneActive($id, $id_tour)
    {
        return $this->published()->where(['matches_season_id' => $id])->where(['sequence_number' => $id_tour])->firstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
