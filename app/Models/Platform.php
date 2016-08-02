<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    protected $table = 'platform';

    public function firstActive()
    {
        return $this->published()->firstOrFail();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
