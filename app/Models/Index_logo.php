<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Index_logo extends Model
{

    protected $table = 'index_logo';

    public function firstActive()
    {
        return $this->published()->firstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
