<?php namespace App\Http\Controllers;

use App\Http\Requests;

class IndexController extends MainController
{

    public function index()
    {
        return view('pages.index', $this->data);
    }

}
