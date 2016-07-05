<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo_category extends Model
{

    protected $table = 'photo_category';

    public function gallery()
    {
        return $this->hasMany('App\Models\Gallery');
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
