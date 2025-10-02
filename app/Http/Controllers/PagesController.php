<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Video;
use App\Models\AboutUs;
use App\Models\Leadership;
use App\Models\Anouncement;
use App\Models\MessageInfo;
use App\Models\UploadedDocs;
use Illuminate\Http\Request;
use App\Models\MinisterComment;
use App\Models\DepartmentService;
use App\Models\PictureCollection;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function homePage()
    {
        
        $slideInfos = Slide::where('status', 1)->orderBy('id', 'desc')->get();
        $postInfos = Post::where('post_status', 1)->get();
        $postInfos = Post::orderBy('id', 'desc')->paginate(3);
        $postInfos1 = Post::orderBy('created_at', 'desc')->limit(1)->get();
        $anouncementInfos = Anouncement::all();
        $ministerInfos = MinisterComment::all();
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        $departmentInfos = DepartmentService::all();
        return view('index', compact(['slideInfos', 'postInfos', 'postInfos1', 'anouncementInfos', 'ministerInfos', 'videoInfos1', 'departmentInfos']));
    }

    public function aboutUs()
    {
        $aboutusInfos = AboutUs::all();
        $leaderInfos = Leadership::where('status', 1)->get();
        $departmentInfos = DepartmentService::orderBy('id', 'desc')->paginate(3);
        $departmentInform = DepartmentService::where('status', 1)->get();
        $pictureInfos = PictureCollection::orderBy('created_at', 'desc')->limit(3)->get();
        return view('pages.about', compact(['aboutusInfos', 'leaderInfos', 'departmentInfos', 'departmentInform', 'pictureInfos']));
    }

    public function newsevents()
    {
        //$postInfos = Post::where('post_status', 1)->get();
        //$postInfos = Post::orderBy('id', 'desc')->simplePaginate(2);
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        $departmentInfos = DepartmentService::all();
        return view('pages.newsevent', compact(['postInfos', 'videoInfos1', 'departmentInfos']));
    }

    public function contactUs()
    {
        $departmentInfos = DepartmentService::all();
        return view('pages.contact', compact(['departmentInfos']));
    }

    public function videoLibrary()
    {
        $videoInfos = Video::orderBy('id', 'desc')->paginate(4);
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(1);
        $departmentInfos = DepartmentService::all();
        return view('pages.videolibrary', compact(['videoInfos', 'videoInfos1', 'departmentInfos']));
    }

    public function photoLibrary()
    {
        $slideInfos = Slide::all();
        $postInfos1 = Post::all();
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        $departmentInfos = DepartmentService::all();
        return view('pages.photolibrary', compact(['slideInfos', 'postInfos1', 'postInfos', 'departmentInfos']));
    }

    public function readmorepost($id)
    {
        $postInfos = Post::orderBy('id', 'desc')->paginate(4);
        Post::find($id)->increment('view_count');
        $postInfo = Post::find($id);
        $departmentInfos = DepartmentService::all();
        $videoInfos1 = Video::orderBy('id', 'desc')->paginate(2);
        return view('readmore', compact(['postInfos', 'postInfo', 'departmentInfos', 'videoInfos1']));
    }

    public function readmoreabout()
    {
        $aboutusInfos = AboutUs::all();
        $departmentInfos = DepartmentService::all();
        $pictureInfos = PictureCollection::orderBy('created_at', 'desc')->limit(3)->get();
        return view('pages.readmoreabout', compact(['aboutusInfos', 'departmentInfos','pictureInfos']));
    }

    public function leadership()
    {
        $leaderInfos = Leadership::where('status', 1)->get();
        $departmentInfos = DepartmentService::all();
        return view('pages.leadership', compact(['leaderInfos', 'departmentInfos']));
    }

    public function utumishidepartment($departmentName)
    {
        $postInfos = Post::where('post_status', 1)->get();
        $postInfos = Post::orderBy('id', 'desc')->paginate(3);
        $anouncementInfos = Anouncement::all();
        $departmentInfos = DepartmentService::all();
        $departmentInfo = DepartmentService::orWhere('departmentName', $departmentName)->first();
        $docInfo = UploadedDocs::orWhere('departmentName', $departmentName)->first();
        return view('pages.utumishi', compact(['postInfos', 'anouncementInfos', 'departmentInfos', 'departmentInfo', 'docInfo']));
    }

    //Function to send message 
    public function sendmessage(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'infoMessage' => 'required',

        ]);

        $input = $request->all();

        MessageInfo::create($input);

        //Send mail to admin
        if ($this->isOnline()) {
            $mail_data = [
                'fullName' => $request->fullName,
                'email' => $request->email,
                'subject' => $request->subject,
                'infoMessage' => $request->infoMessage,
                'mailto' => 'info@tamisemim.go.tz',
            ];

            Mail::send('sendmail', $mail_data, function ($msg) use ($mail_data) {
                $msg->to($mail_data['mailto']);
                $msg->from($mail_data['email']);
                $msg->subject($mail_data['subject']);
            });

            return redirect()->back()->with(['status' => 'Your message has been sent. Thank you!']);
        } else {

            return redirect()->back()->with(['status' => 'Not connected with internet']);
        }
    }

    public function isOnline($site = "https://www.youtube.com/"){
        if (@fopen($site, 'r')) {
            return true;
        }else{
            return false;
        }
    }
}
