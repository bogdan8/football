<?php namespace App\Http\Controllers;

use App\Models\Donate_people;
use App\Models\News;
use App\Models\Discussion;


class IndexController extends MainController
{

    public function index(News $news, Donate_people $people, Discussion $discussion)
    {
        /** Новини */
        $this->data['news'] = $news->getActiveWithLimit();
        /** Кінець новин */
        /** Люди які зробили пожертви */
        $this->data['donate_people'] = $people->getActive();
        /** Кінець люди які зробили пожертви */
        /** Обговорення */
        $this->data['discussion_all'] = $discussion->getActive();
        $this->data['discussion_limit'] = $discussion->getActiveWithLimit();
        /** кінець обговорення */
        return view('pages.index', $this->data);
    }

}
