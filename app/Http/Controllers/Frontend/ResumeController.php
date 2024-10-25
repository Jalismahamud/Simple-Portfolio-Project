<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function index()
    {
         return view('Frontend.resume');
    }

    public function resumeLink(Request $request)
    {
      return DB::table('resumes')->get();
    }

    public function experienceData(Request $request)
    {
      return DB::table('resumes')->get();
    }

    public function educationData(Request  $request)
    {
      return DB::table('resumes')->get();
    }

    public function skillData(Request  $request)
    {
       return DB::table('resumes')->get();
    }
}
