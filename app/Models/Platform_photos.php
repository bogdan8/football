<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platform_photos extends Model
{

    protected $table = 'platform_photos';

    public function getActive()
    {
        return $this->published()->get();
    }

    public function scopePublished($query)
    {
        $query->where(['active' => '1']);
    }

}
