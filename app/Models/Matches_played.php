<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matches_played extends Model
{
    protected $table = 'matches_played';

    public function matches_tour()
    {
        return $this->belongsTo('App\Models\Matches_tour');
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
