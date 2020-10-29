<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function index()
    {
        return view('welcome');
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
        $a->save();

        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }
}
