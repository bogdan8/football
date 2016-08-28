<?php namespace App\Http\Controllers;

use App\Models\Browsing_history;
use App\Models\Browsing_history_people_day_in_month;
use App\Models\Matches_season;
use App\Models\Next_and_last_matches;
use App\Models\Racing_circles;
use App\Models\Report_tour;
use App\Models\Standings;
use App\Models\Team_logo;
use App\Models\Team_peoples_position;

class TeamsController extends MainController
{

    public function storage(Team_peoples_position $team_peoples_position, Team_logo $team_logo)
    {
        $this->data['team_peoples_position'] = $team_peoples_position->getActive();
        $this->data['team_logo'] = $team_logo->firstActive();

        return view('teams.storage', $this->data);
    }

    public function standings(Matches_season $season, Next_and_last_matches $next_and_last_matches, Standings $standings)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['standings'] = $standings->firstSeason($this->data['season'][0]->id);

        return view('teams.standings', $this->data);
    }

    public function standings_season($id, Matches_season $season, Next_and_last_matches $next_and_last_matches, Standings $standings)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);
        $this->data['standings'] = $standings->firstSeason($this->data['season'][0]->id);

        return view('teams.standings_season', $this->data);
    }

    public function matches_season(Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
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

    public function report(Report_tour $report_tour, Next_and_last_matches $next_and_last_matches, Matches_season $season)
    {
        $this->data['season'] = $season->getActive();
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['report_tour'] = $report_tour->getActive();

        return view('teams.report', $this->data);
    }

    public function report_season($id, Report_tour $report_tour, Next_and_last_matches $next_and_last_matches, Matches_season $season)
    {
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['report_tour'] = $report_tour->getActive();

        return view('teams.report_season', $this->data);
    }

    public function report_season_tour($id, $id_tour, Report_tour $report_tour, Next_and_last_matches $next_and_last_matches, Matches_season $season)
    {
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['report_tour'] = $report_tour->getActive();
        $this->data['report_tour_one'] = $report_tour->oneActive($id, $id_tour);

        return view('teams.report_season_tour', $this->data);
    }
}
