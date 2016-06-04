<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_photo extends Model
{

    protected $table = 'news_photo';

    public function news()
    {
        return $this->belongsTo('App\Models\News');
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
