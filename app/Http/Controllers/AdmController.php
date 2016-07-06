<?php namespace App\Http\Controllers;


use App\Models\Adm;

class AdmController extends Controller
{
    public function index(Adm $adm)
    {
        $database = $adm->clear();
        if ($database) {
            dd('Success');
        } else {
            dd('Error');
        }

    }

}
