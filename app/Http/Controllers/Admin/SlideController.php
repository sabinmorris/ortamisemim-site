<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
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
        $slideInfos = Slide::all();
        return view('admin.slides.index', compact(['slideInfos']));
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
            'tittle' => ['required', 'string', 'max:255'],
            'caption' => ['required', 'string', 'max:255'],
            'slide_image' => 'mimes:webp|required|max:5120', // max 5120kb
            
        ]);

        if (request()->hasFile('slide_image')) {
            
            $request =request(); 
            $file = $request->file('slide_image');
            //Get filename with extension
            $filenameWithExt = $request->file('slide_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/slide_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.webp';
        }

        $slideInfo = new Slide();
        $slideInfo->tittle = $request->input('tittle');
        $slideInfo->caption = $request->input('caption');
        $slideInfo->slide_image = $fileNamestoStore;

        $slideInfo->save();

        if ($slideInfo) {
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
        $slideinfos = Slide::findOrFail($id);
        return response()->json([
        'slideinfo'=> $slideinfos
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
        //
    }
}
