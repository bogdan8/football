<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_regulations_number extends Model
{

    protected $table = 'kfc_regulations_number';

    public function kfc_regulations_terms()
    {
        return $this->hasMany('App\Models\Kfc_regulations_terms');
    }

    public function getActive()
    {
        return $this->published()->get();
    }

    public function firstWhereIdTrue($id)
    {
        return $this->published()->where(['id' => $id])->first();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
