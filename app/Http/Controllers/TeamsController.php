<?php namespace App\Http\Controllers;

use App\Models\Browsing_history;
use App\Models\Browsing_history_people_day_in_month;
use App\Models\Matches_season;
use App\Models\Next_and_last_matches;

class TeamsController extends MainController
{

    public function storage()
    {

    }

    public function matches_season(Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['standings_season'] = $season->getActive();

        return view('teams.matches_season', $this->data);
    }

    public function matches($season, Matches_season $matches_season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['standings_season'] = $matches_season->getActive();
        $this->data['standings_season_with_standings'] = $matches_season->firstSeason($season);

        return view('teams.matches', $this->data);
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
