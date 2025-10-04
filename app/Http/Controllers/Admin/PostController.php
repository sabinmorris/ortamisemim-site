<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postInfos = Post::all();
        return view('admin.posts.index', compact(['postInfos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_tittle' => ['required', 'string', 'max:255'],
            'post_description' => ['required', 'string', 'max:500'],
            'post_image' => 'mimes:webp|required|max:5120', // max 5120kb
            
        ]);

        if (request()->hasFile('post_image')) {
            
            //$request =request(); 
            $file = $request->file('post_image');
            //Get filename with extension
            $filenameWithExt = $request->file('post_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/post_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.webp';
        }

        $postInfo = new Post;
        $postInfo->post_tittle = $request->input('post_tittle');
        $postInfo->post_description = $request->input('post_description');
        $postInfo->post_image = $fileNamestoStore;
        
        $postInfo->save();

        if ($postInfo) {
            return response()->json([
                'message' => 'successifully Slide image info saved',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postinfos = Post::findOrFail($id);
        return response()->json([
        'postinfo'=> $postinfos
     ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postinfos = Post::findorFail($id);
        
        if ($postinfos->post_image !== 'noImage.webp') {

            //delete image
            Storage::delete('storage/uploads/post_images/' . $postinfos->post_image);
        }

        $postinfos->delete();
        return redirect()->back()->with('message', 'data successfull deleted');
    }
}
