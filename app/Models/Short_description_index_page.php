<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Short_description_index_page extends Model
{

    protected $table = 'short_description_index_page';

    public function getActive()
    {
        return $this->get();
    }


}
