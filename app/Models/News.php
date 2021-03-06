<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';

    public function news_photo()
    {
        return $this->hasMany('App\Models\News_photo');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function getActiveWithPaginate()
    {
        return $this->published()->paginate(8);
    }

    public function getActiveWithLimit()
    {
        return $this->published()->take(1)->get();
    }

    public function getBySlug($slug)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
