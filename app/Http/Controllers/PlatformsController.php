<?php namespace App\Http\Controllers;

use App\Models\Platform;
use App\Models\Platform_photos;

class PlatformsController extends MainController
{

    public function index(Platform $platform, Platform_photos $platform_photos)
    {
        $this->data['platform'] = $platform->firstActive();
        $this->data['platform_photos'] = $platform_photos->getActive();

        return view('platform.index', $this->data);
    }
}
