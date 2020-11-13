<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function newAnnouncement()
    {
        return view('announcement.new');
    }

    public function createAnnouncement(AnnouncementRequest $request)
    {
        $a = new Announcement();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->category_id = $request->input('category');
        $a->user_id = Auth::id();
        $a->save();

        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }
}
