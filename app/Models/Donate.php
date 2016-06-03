<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{

    protected $table = 'donate';

    public function getActive()
    {
        return $this->get();

    }

}
