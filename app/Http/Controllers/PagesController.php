<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{
    public function homePage(){
        $slideInfos = Slide::all();
        $postInfos = Post::where('post_status', 1)->get();
        $postInfos = Post::orderBy('id', 'desc')->paginate(3);
        $postInfos1 = Post::orderBy('created_at', 'desc')->limit(1)->get();
        return view('index', compact(['slideInfos', 'postInfos', 'postInfos1']));
    }
    
    public function aboutUs(){
        return view('pages.about');
    }

    public function newsevents(){
        return view('pages.newsevent');
    }

    public function contactUs(){

        return view('pages.contact');
    }

    public function videoLibrary(){
        return view('pages.videolibrary');
    }

    public function photoLibrary(){
        
        return view('pages.photolibrary');
    }

    public function readmorepost($id){
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        $postInfo = Post::find($id);
        return view('readmore', compact(['postInfos', 'postInfo']));
    }

    public function readmoreabout(){
        return view('pages.readmoreabout');
    }

    public function leadership(){
        return view('pages.leadership');
    }

    public function utumishidepartment(){
        return view('pages.utumishi');
    }
}
