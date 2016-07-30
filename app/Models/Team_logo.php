<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team_logo extends Model
{

    protected $table = 'team_logo';

    public function firstActive()
    {
        return $this->published()->firstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
