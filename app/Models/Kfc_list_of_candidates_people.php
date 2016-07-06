<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_list_of_candidates_people extends Model
{

    protected $table = 'kfc_list_of_candidates_people';

    public function kfc_list_of_candidates_year()
    {
        return $this->belongsTo('App\Models\Kfc_list_of_candidates_year');
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
