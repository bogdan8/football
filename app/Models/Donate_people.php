<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Donate_people extends Model
{

    protected $table = 'donate_people';

    public function getActive()
    {
        return $this->get();

    }
}
