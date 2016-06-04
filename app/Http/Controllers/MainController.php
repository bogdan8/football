<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;


class MainController extends Controller
{

    public function __construct(Request $request, Menus $menus)
    {
        $this->request = $request; #request
        $this->data['menus'] = $menus->getActive();

        $URL = $_SERVER['REQUEST_URI'];
        $this->data['url_lang'] = substr($URL, 1, 2);
    }

}