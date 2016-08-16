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

        $this->data['URL'] = $_SERVER['REQUEST_URI'];
        $long_url = substr($this->data['URL'], 1, 10);
        $small_url = strpos($long_url, '/');
        $this->data['url_for_dropdown'] = substr($long_url, 0, $small_url);
    }

}