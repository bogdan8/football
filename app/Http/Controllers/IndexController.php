<?php namespace App\Http\Controllers;

use App\Models\Next_and_last_matches;
use App\Models\Next_and_last_teams;
use Illuminate\Http\Request;
use App\Models\Donate_people;
use App\Models\News;
use App\Models\Discussion;
use App\Models\Discussion_comments;

class IndexController extends MainController
{

    public function index(News $news, Donate_people $people, Discussion $discussion, Next_and_last_matches $next_and_last_matches, Request $request)
    {
        if ($request->has('description')) {
            $discussion_comments = new Discussion_comments();
            $discussion_comments->name = $request->get('name');
            $discussion_comments->discussion_id = $request->get('discussion_id');
            $discussion_comments->description = $request->get('description');

            $discussion_comments->save();
        }

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
        /** Наступний матч і попередній */
        $this->data['next_match'] = $next_and_last_matches->getNext();
        /** Кінець наступний матч і попередній */
        return view('pages.index', $this->data);
    }

}
