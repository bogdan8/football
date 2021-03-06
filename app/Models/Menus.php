<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{

    protected $table = 'menus';

    public function subparagraph()
    {
        return $this->hasMany('App\Models\Subparagraph');
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
