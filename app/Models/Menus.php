<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{

    protected $table = 'menus';

    public function getActive()
    {
        return $this->get();

    }

}
