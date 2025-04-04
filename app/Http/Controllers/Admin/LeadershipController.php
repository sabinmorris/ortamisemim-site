<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaderInfos = Leadership::all();
        return view('admin.leaders.index', compact(['leaderInfos']));
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
            'name' => ['required', 'string', 'max:255'],
            'role' => 'required',
            'designation' => 'required',
            'description' => ['required', 'string', 'max:500'],
            'leader_image' => 'mimes:webp|nullable|max:5120', // max 5120kb
            
        ]);

        if (request()->hasFile('leader_image')) {
            
            $request =request(); 
            $file = $request->file('leader_image');
            //Get filename with extension
            $filenameWithExt = $request->file('leader_image')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/leader_images', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noImage.webp';
        }

        $leaderInfos = new Leadership();
        $leaderInfos->name = $request->input('name');
        $leaderInfos->role = $request->input('role');
        $leaderInfos->designation = $request->input('designation');
        $leaderInfos->description = $request->input('description');
        $leaderInfos->leader_image = $fileNamestoStore;
        
        $leaderInfos->save();

        if ($leaderInfos) {
            return response()->json([
                'message' => 'successifully leader info saved',
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
        $leaderInfos =  Leadership::findOrFail($id);
        return response()->json([
            'leaderInfo' => $leaderInfos
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
