<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
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
        $videoInfos = Video::orderBy('id', 'desc')->get();
        return view('admin.videos.index', compact(['videoInfos']));
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
        // ✅ Validation with custom messages
        $validator = Validator::make($request->all(), [
            'tittle' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'max:255'],
        ], [
            'tittle.required' => 'Tittle size must not exceeded 255 words.',
            'link.required' => 'Link size must not exceed 5MB.',
        ]);

        // If validation fails, return JSON with field-specific errors
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'code' => 422
            ], 422);
        }

        $videoInfos = new Video();
        $videoInfos->tittle = $request->input('tittle');
        $videoInfos->link = $request->input('link');
        
        $videoInfos->save();

        if ($videoInfos) {
            return response()->json([
                'message' => 'successifully link info saved',
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
        $videoInfos = Video::findOrFail($id);
        return response()->json([
            'videoInfo' => $videoInfos
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
        $videoInfos = Video::findorFail($id);
        $videoInfos->delete();
        return redirect()->back()->with('message', 'data successfull deleted');
    }
}
