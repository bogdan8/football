<?php namespace App\Http\Controllers;

use App\Models\Discussion;

class DiscussionController extends MainController
{

    public function discussion_get(Discussion $discussion)
    {
        $this->data['discussion'] = $discussion->getActive();

        return view('discussion.discussion_get', $this->data);
    }

    public function discussion_with_limit(Discussion $discussion)
    {
        $this->data['discussion'] = $discussion->getActiveWithLimit();

        return view('discussion.discussion_limit', $this->data);
    }

}
