<?php

namespace App\Http\Controllers\Admin;

use App\Models\UploadedDocs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DocumentUploadController extends Controller
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
        $docsInfos = UploadedDocs::orderBy('id', 'desc')->get();
        return view('admin.docs.index', compact(['docsInfos']));
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
            'fileName' => ['required', 'string', 'max:255'],
            'departmentName' => ['required'],
            'document' => 'mimes:pdf|required|max:5120', // max 5120kb
            
        ]);

        if (request()->hasFile('document')) {
            
            $request =request(); 
            $file = $request->file('document');
            //Get filename with extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();
            
            $fileNamestoStore = $filename. '_'. time() . '.' . $extension;
            $file->move('storage/uploads/document_files', $fileNamestoStore);

        }else{
            $fileNamestoStore = 'noFile.pdf';
        }

        $docsInfos = new UploadedDocs();
        $docsInfos->fileName = $request->input('fileName');
        $docsInfos->departmentName = $request->input('departmentName');
        $docsInfos->document = $fileNamestoStore;
        
        $docsInfos->save();

        if ($docsInfos) {
            return response()->json([
                'message' => 'successifully document saved',
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
        $docsInfos = UploadedDocs::findOrFail($id);
        return response()->json([
            'docsInfo' => $docsInfos
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
        $docsInfos = UploadedDocs::findorFail($id);
        
        if ($docsInfos->document !== 'nofile.jpg') {

            //delete picha
            Storage::delete('storage/uploads/document_files/' . $docsInfos->document);
        }

        $docsInfos->delete();
        return redirect()->back()->with('message', 'data successfull deleted');
        
    }
}
