<?php namespace App\Http\Controllers;

use App\Models\Kfc_fundraiser;
use App\Models\Kfc_spending;

class KfcController extends MainController
{

    public function index()
    {
    }

    public function spending(Kfc_spending $spending)
    {
        $this->data['kfc_spending'] = $spending->getActive();

        return view('kfc.spending', $this->data);
    }

    public function fundraiser(Kfc_fundraiser $fundraiser)
    {
        $this->data['kfc_fundraiser'] = $fundraiser->getActive();

        return view('kfc.fundraiser', $this->data);
    }

}
