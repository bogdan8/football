<?php namespace App\Http\Controllers;

use App\Models\Donate_people;
use App\Models\Matches_played;
use App\Models\News;
use App\Models\Standings;

class IndexController extends MainController
{

    public function index(News $news, Matches_played $matches_played, Standings $standings, Donate_people $people)
    {
        /** Новини */
        $this->data['news'] = $news->getActiveWithLimit();
        /** Кінець новин */
        /** Зіграні матчі */
        $this->data['matches_played_adult'] = $matches_played->getActiveAdult(); //Дорослі
        $this->data['matches_played_young'] = $matches_played->getActiveYoung(); //Діти
        /** Кінець зіграних матчів */
        /** Турнірна таблиця */
        $this->data['standings_adult'] = $standings->getActiveAdult(); //Дорослі
        $this->data['standings_young'] = $standings->getActiveYoung(); //Діти
        /** Кінець турнірної таблиці */
        /** Люди які зробили пожертви */
        $this->data['donate_people'] = $people->getActive(); //Дорослі
        /** Кінець люди які зробили пожертви */
        return view('pages.index', $this->data);
    }

}
