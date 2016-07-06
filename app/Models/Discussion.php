<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $table = 'discussion';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function getActiveWithLimit()
    {
        return $this->published()->take(5)->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
