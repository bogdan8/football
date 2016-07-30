<?php namespace App\Http\Controllers;

use App\Models\Matches_season;
use App\Models\Next_and_last_matches;
use App\Models\Racing_circles;

class MatchesController extends MainController
{

    public function index(Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();

        return view('matches.index', $this->data);
    }

    public function season($id, Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);

        return view('matches.season', $this->data);
    }

    public function standings($id, Matches_season $season, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);

        return view('matches.standings', $this->data);
    }

    public function racing($id, $id_racing, Matches_season $season, Racing_circles $circles, Next_and_last_matches $next_and_last_matches)
    {
        $this->data['next_matches'] = $next_and_last_matches->getNext();
        $this->data['season'] = $season->getActive();
        $this->data['season_one'] = $season->find($id);
        $this->data['racing'] = $circles->find($id_racing);
        $this->data['racing_get_with_season'] = $circles->getSeason($id);
        $this->data['racing_one'] = $circles->firstRacing($id_racing, $id);

        return view('matches.racing', $this->data);
    }

}
