<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion_comments extends Model
{

    protected $table = 'discussion_comments';

    public function discussion()
    {
        return $this->belongsTo('App\Models\Discussion');
    }

    public function getActive()
    {
        return $this->get();
    }
}
