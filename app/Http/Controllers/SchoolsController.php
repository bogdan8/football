<?php namespace App\Http\Controllers;

use App\Models\Browsing_history;
use App\Models\Browsing_history_people_day_in_month_school;

class SchoolsController extends MainController
{

    public function junior_group(Browsing_history $browsing_history, Browsing_history_people_day_in_month_school $day_in_month)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_day_in_month'] = $day_in_month->getActive();

        return view('school.junior_group', $this->data);
    }

    public function senior_group(Browsing_history $browsing_history, Browsing_history_people_day_in_month_school $day_in_month)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_day_in_month'] = $day_in_month->getActive();

        return view('school.senior_group', $this->data);
    }

    public function junior_group_people($mounts, Browsing_history $browsing_history)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_history_mounts'] = $browsing_history->firstMounts($mounts);

        return view('school.junior_group_mounts', $this->data);
    }

    public function senior_group_people($mounts, Browsing_history $browsing_history)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_history_mounts'] = $browsing_history->firstMounts($mounts);

        return view('school.senior_group_mounts', $this->data);
    }

}
