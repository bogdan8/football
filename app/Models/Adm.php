<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{

    public function clear()
    {
        \DB::table('adult')->delete();
        \DB::table('donate')->delete();
        \DB::table('donate_people')->delete();
        \DB::table('gallery')->delete();
        \DB::table('matches_played')->delete();
        \DB::table('menus')->delete();
        \DB::table('migrations')->delete();
        \DB::table('news')->delete();
        \DB::table('news_photo')->delete();
        \DB::table('password_resets')->delete();
        \DB::table('photo_category')->delete();
        \DB::table('standings')->delete();
        \DB::table('team')->delete();
        \DB::table('users')->delete();
    }

}
