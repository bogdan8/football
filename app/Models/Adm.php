<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{

    public function kern()
    {
        \DB::table('adult')->delete();
        \DB::table('donate')->delete();
        \DB::table('discussion')->delete();
        \DB::table('donate')->delete();
        \DB::table('donate_people')->delete();
        \DB::table('gallery')->delete();
        \DB::table('matches_played')->delete();
        \DB::table('kfc_fundraiser')->delete();
        \DB::table('kfc_list_of_candidates_people')->delete();
        \DB::table('kfc_list_of_candidates_year')->delete();
        \DB::table('kfc_regulations_number')->delete();
        \DB::table('kfc_regulations_terms')->delete();
        \DB::table('kfc_spending')->delete();
        \DB::table('matches_season')->delete();
        \DB::table('matches_tour')->delete();
        \DB::table('menus')->delete();
        \DB::table('migrations')->delete();
        \DB::table('news')->delete();
        \DB::table('news_photo')->delete();
        \DB::table('next_and_last_matches')->delete();
        \DB::table('next_and_last_teams')->delete();
        \DB::table('password_resets')->delete();
        \DB::table('photo_category')->delete();
        \DB::table('racing_circles')->delete();
        \DB::table('standings')->delete();
        \DB::table('start_matches')->delete();
        \DB::table('subparagraph')->delete();
        \DB::table('team')->delete();
        \DB::table('users')->delete();
    }

}
