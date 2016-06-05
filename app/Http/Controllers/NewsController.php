<?php namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends MainController
{

    public function index(News $news)
    {
        $this->data['news'] = $news->getActiveWithPaginate();

        return view('news.index', $this->data);
    }

    public function cart($slug, News $news)
    {
        $this->data['cart'] = $news->getBySlug($slug);

        return view('news.cart', $this->data);
    }

}
