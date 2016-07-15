<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_regulations_terms extends Model
{

    protected $table = 'kfc_regulations_terms';

    public function kfc_regulations_number()
    {
        return $this->belongsTo('App\Models\Kfc_regulations_number');
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
