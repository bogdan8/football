<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_fundraiser extends Model
{

    protected $table = 'kfc_fundraiser';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
