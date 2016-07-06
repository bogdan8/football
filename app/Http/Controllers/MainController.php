<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Models\Donate;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function __construct(Request $request, Menus $menus, Donate $donate)
    {
        $this->request = $request; #request
        $this->data['menus'] = $menus->getActive();

        /** Пожерти які потрібні */
        if ($this->data['donate'] = $donate->firstActive()) {
            /** відсоток від числа */
            $this->data['interest'] = $this->data['donate']->collected_money * 100 / $this->data['donate']->need_money;
            /** відсоток від числа */
        }
        /** Кінець пожертв які потрібні */

        $URL = $_SERVER['REQUEST_URI'];
        $this->data['url_lang'] = substr($URL, 1, 2);
    }

}