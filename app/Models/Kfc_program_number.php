<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_program_number extends Model
{

    protected $table = 'kfc_program_number';

    public function kfc_program_terms()
    {
        return $this->hasMany('App\Models\Kfc_program_terms');
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
