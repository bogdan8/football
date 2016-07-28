<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $table = 'discussion';

    public function discussion_comments()
    {
        return $this->hasMany('App\Models\Discussion_comments');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function getActiveWithLimit()
    {
        return $this->published()->take(4)->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
