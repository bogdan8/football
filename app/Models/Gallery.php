<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table = 'gallery';

    public function photo_category()
    {
        return $this->belongsTo('App\Models\Photo_category');
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
