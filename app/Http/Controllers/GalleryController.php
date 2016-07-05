<?php namespace App\Http\Controllers;

use App\Models\Photo_category;

class GalleryController extends MainController
{

    public function index(Photo_category $photo_category)
    {
        $this->data['photo_category'] = $photo_category->getActive();

        return view('gallery.index', $this->data);
    }

    public function cart($title, Photo_category $photo_category)
    {
        $this->data['cart'] = $photo_category->getBySlug($title);

        return view('gallery.cart', $this->data);
    }

}
