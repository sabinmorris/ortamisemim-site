<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Anouncement;
use App\Models\Leadership;
use App\Models\MinisterComment;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{
    public function homePage(){
        $slideInfos = Slide::all();
        $postInfos = Post::where('post_status', 1)->get();
        $postInfos = Post::orderBy('id', 'desc')->paginate(3);
        $postInfos1 = Post::orderBy('created_at', 'desc')->limit(1)->get();
        $anouncementInfos = Anouncement::all();
        $ministerInfos = MinisterComment::all();
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        return view('index', compact(['slideInfos', 'postInfos', 'postInfos1', 'anouncementInfos','ministerInfos', 'videoInfos1']));
    }
    
    public function aboutUs(){
        $aboutusInfos = AboutUs::all();
        $leaderInfos = Leadership::where('status', 1)->get();
        // $leaderInfos2 = Leadership::where('id', 2)->get();
        // $leaderInfos3 = Leadership::where('id', 3)->get();
        return view('pages.about', compact(['aboutusInfos','leaderInfos']));
    }

    public function newsevents(){
        //$postInfos = Post::where('post_status', 1)->get();
        //$postInfos = Post::orderBy('id', 'desc')->simplePaginate(2);
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        return view('pages.newsevent', compact(['postInfos', 'videoInfos1']));
    }

    public function contactUs(){

        return view('pages.contact');
    }

    public function videoLibrary(){
        $videoInfos = Video::orderBy('id', 'desc')->paginate(4);
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        return view('pages.videolibrary', compact(['videoInfos','videoInfos1']));
    }

    public function photoLibrary(){
        $slideInfos = Slide::all();
        $postInfos1 = Post::all();
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        return view('pages.photolibrary', compact(['slideInfos', 'postInfos1', 'postInfos']));
    }

    public function readmorepost($id){
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        $postInfo = Post::find($id);
        return view('readmore', compact(['postInfos', 'postInfo']));
    }

    public function readmoreabout(){
        $aboutusInfos = AboutUs::all();
        return view('pages.readmoreabout',compact(['aboutusInfos']));
    }

    public function leadership(){
        $leaderInfos = Leadership::where('status', 1)->get();
        return view('pages.leadership', compact(['leaderInfos']));
    }

    public function utumishidepartment(){
        $postInfos = Post::where('post_status', 1)->get();
        $postInfos = Post::orderBy('id', 'desc')->paginate(3);
        $anouncementInfos = Anouncement::all();
        return view('pages.utumishi', compact(['postInfos','anouncementInfos']));
    } 
}
