<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {   
        $announcements = Announcement::orderBy('created_at','desc')->take(5)->get();
        return view('welcome',compact('announcements'));
    } 
}
