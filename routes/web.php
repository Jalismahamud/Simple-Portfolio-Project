<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use  App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ResumeController;


Route::get('/',[HomeController::class],'index');
Route::get('/projects',[ProjectController::class],'index');
Route::get('/resume',[ResumeController::class],'index');
Route::get('/contact',[ContactController::class],'index');


//Ajax Call Routes

Route::get('/hero-data', [App\Http\Controllers\Frontend\HomeController::class, 'heroData']);

Route::get('/about-data',[HomeController::class,'aboutData']);
Route::get('/social-data',[HomeController::class,'socialData']);
Route::get('/hero-data',[ProjectController::class,'projectData']);
Route::get('/resume-data',[ResumeController::class,'resumeLink']);
Route::get('/experience-data',[ResumeController::class,'experienceData']);
Route::get('/education-data',[ResumeController::class,'educationData']);
Route::get('/skill-data',[ResumeController::class,'skillData']);
Route::get('/hero-data',[ResumeController::class,'heroData']);
Route::post('/contact-data',[ContactController::class,'contactRequest']);

