<?php namespace App\Http\Controllers;


use App\Models\Adm;

class KernController extends Controller
{
    public function index(Adm $adm)
    {
        $database = $adm->kern();
        if ($database) {
            dd('Success');
        } else {
            dd('Error');
        }

    }

}
