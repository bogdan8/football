<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{

    public function __construct(Request $request)
    {
        $this->request = $request; #request

        $URL = $_SERVER['REQUEST_URI'];
        $this->data['url_lang'] = substr($URL, 1, 2);
    }

}