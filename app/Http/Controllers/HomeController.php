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
    {   $uniqueSecret = base_convert(sha1(uniqid(mt_rand())),16,36);
        return view('announcement.new',compact('uniqueSecret'));
    }

    public function createAnnouncement(AnnouncementRequest $request)
    {
        $a = new Announcement();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->category_id = $request->input('category');
        $a->user_id = Auth::id();
        $a->save();

        $uniqueSecret = $request->input('uniqueSecret');
        dd($uniqueSecret);

        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }
    public function uploadImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
        session()->push("images.{$uniqueSecret}",$fileName);

        return response()->json(
            session("images.{$uniqueSecret}")
        );
    }
}
