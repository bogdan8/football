<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report_replacements extends Model
{
    protected $table = 'report_replacements';

    public function report()
    {
        return $this->belongsTo('App\Models\Report');
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
