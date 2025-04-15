<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anouncement;
use Dom\Attr;
use Illuminate\Http\Request;

class AnouncementController extends Controller
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
        $anouncementInfos = Anouncement::all();
        return view('admin.anouncement.index', compact(['anouncementInfos']));
        
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
            'file_name' => 'mimes:pdf|required|max:5120', // max 5120kb
            
        ]);

        if (request()->hasFile('file_name')) {
            
            $request =request(); 
            $file = $request->file('file_name');
            //Get filename with extension
            $filenameWithExt = $request->file('file_name')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/anouncement_docs', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noFile.pdf';
        }

        $anouncementInfos = new Anouncement();
        $anouncementInfos->tittle = $request->input('tittle');
        $anouncementInfos->file_name = $fileNamestoStore;
        
        $anouncementInfos->save();

        if ($anouncementInfos) {
            return response()->json([
                'message' => 'Successifully Anouncement Info Saved',
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
        $anouncementInfos = Anouncement::findOrFail($id);
        return response()->json([
            'anouncementInfo' => $anouncementInfos
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
