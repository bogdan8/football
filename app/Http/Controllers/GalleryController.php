<?php namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Photo_category;

class GalleryController extends MainController
{

    public function index(Photo_category $photo_category, Gallery $gallery)
    {
        $this->data['photo_category'] = $photo_category->getActive();
        $this->data['all_photo'] = $gallery->getActive();

        return view('gallery.index', $this->data);
    }

    public function cart($title, Photo_category $photo_category)
    {
        $this->data['cart'] = $photo_category->getBySlug($title);

        return view('gallery.cart', $this->data);
    }

    public function all_photo(Gallery $gallery)
    {
        $this->data['all_photo'] = $gallery->getActive();

        return view('gallery.all_photo', $this->data);
    }

}
