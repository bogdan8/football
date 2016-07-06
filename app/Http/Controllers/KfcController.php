<?php namespace App\Http\Controllers;

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

}
