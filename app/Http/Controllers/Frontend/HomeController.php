<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HeroPropertie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.home');
    }


    public function jalis(Request  $request)
    {

        // $data = HeroPropertie::get();

        // dd($data);
       return DB::table('hero_properties')->get()->all();
    }


    public function aboutData(Request $request)
    {
        return DB::table('abouts')->get();

    }


    public function socialData(Request $request)
    {
         return DB::table('socials')->get();
    }
}
