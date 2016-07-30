<?php namespace App\Http\Controllers;

use App\Models\Browsing_history;
use App\Models\Browsing_history_people_day_in_month;
use App\Models\Matches_season;
use App\Models\Next_and_last_matches;
use App\Models\Racing_circles;

class TeamsController extends MainController
{

    public function storage()
    {

    }

    public function standings(Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();

        return view('teams.standings', $this->data);
    }

    public function standings_season($id, Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);

        return view('teams.standings_season', $this->data);
    }

    public function matches_season(Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['season'] = $season->getActive();

        return view('teams.matches_season', $this->data);
    }

    public function season($id, Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);

        return view('teams.season', $this->data);
    }

    public function racing($id, $id_racing, Matches_season $season, Racing_circles $circles, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);
        $this->data['racing'] = $circles->find($id_racing);
        $this->data['racing_get_with_season'] = $circles->getSeason($id);
        $this->data['racing_one'] = $circles->firstRacing($id_racing, $id);

        return view('teams.racing', $this->data);
    }

    public function browsing_history(Browsing_history $browsing_history, Browsing_history_people_day_in_month $day_in_month)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_day_in_month'] = $day_in_month->getActive();

        return view('teams.browsing_history', $this->data);
    }

    public function browsing_history_people($mounts, Browsing_history $browsing_history)
    {
        $this->data['browsing_history'] = $browsing_history->getActive();
        $this->data['browsing_history_mounts'] = $browsing_history->firstMounts($mounts);

        return view('teams.browsing_history_mounts', $this->data);
    }


}
