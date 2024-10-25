<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
      return view('Frontend.contact');
    }

    public function contactRequest(Request $request)
    {
       return DB::table('contacts')->get();
    }
}
