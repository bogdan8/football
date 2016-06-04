<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standings extends Model
{
    protected $table = 'standings';

    public function adult()
    {
        return $this->belongsTo('App\Models\Adult');
    }

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
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
