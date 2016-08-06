<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_program_terms extends Model
{

    protected $table = 'kfc_program_terms';

    public function kfc_program_number()
    {
        return $this->belongsTo('App\Models\Kfc_program_number');
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
