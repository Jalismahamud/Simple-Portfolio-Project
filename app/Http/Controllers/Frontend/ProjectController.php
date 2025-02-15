<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
      return view('Frontend.project');
    }


    public function projectData(Request $request)
    {
      return DB::table('projects')->get();
    }
}
