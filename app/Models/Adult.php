<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{

    protected $table = 'adult';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
