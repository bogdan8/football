<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subparagraph extends Model
{

    protected $table = 'subparagraph';

    public function menus()
    {
        return $this->belongsTo('App\Models\Menus');
    }

    public function getActive()
    {
        return $this->orderBy('weight')->published()->get();

    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
