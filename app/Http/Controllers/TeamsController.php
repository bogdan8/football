<?php namespace App\Http\Controllers;

use App\Models\Browsing_history;

class TeamsController extends MainController
{

    public function storage()
    {

    }

    public function matches()
    {

    }

    public function browsing_history(Browsing_history $browsing_history)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();

        return view('teams.browsing_history', $this->data);
    }

    public function browsing_history_people($mounts, Browsing_history $browsing_history)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_history_mounts'] = $browsing_history->firstMounts($mounts);

        return view('teams.browsing_history_mounts', $this->data);
    }


}
