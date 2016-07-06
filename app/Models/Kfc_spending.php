<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kfc_spending extends Model
{

    protected $table = 'kfc_spending';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
