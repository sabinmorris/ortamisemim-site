<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Anouncement;
use App\Models\DepartmentService;
use App\Models\Leadership;
use App\Models\MinisterComment;
use App\Models\PictureCollection;
use App\Models\Post;
use App\Models\UploadedDocs;
use App\Models\Video;
use Illuminate\Support\Facades\File;

class GeneralUpdateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    //Update slide status only
    public function updateslidestatus(Request $request)
    {
        $slideInfo = Slide::findOrFail($request->slide_id);
        $slideInfo->status = $request->status;
        $slideInfo->save();
        if ($slideInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //Update slides info
    public function updateslide(Request $request)
    {
        $this->validate($request, [
            'tittlee' => ['required', 'string', 'max:255'],
            'captionn' => ['required', 'string', 'max:255'],
             'statuss' => 'required',
             'slide_imagee' => 'mimes:webp|nullable|max:5120' // max 5120kb
        ]);

        $slideInfo = Slide::findOrFail($request->slideid);
        $slideInfo->tittle = $request->input('tittlee');
        $slideInfo->caption = $request->input('captionn');
        $slideInfo->status = $request->input('statuss');

        if ($request->hasFile('slide_imagee')) {
            $destination_path = 'storage/uploads/slide_images/' . $slideInfo->slide_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('slide_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('slide_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/slide_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.webp';
        }

        if ($request->hasFile('slide_imagee')) {

            $slideInfo->slide_image = $fileNamestoStore;
        }

        $slideInfo->update();

        if ($slideInfo) {
            return response()->json([
                'message' => 'Successifully slide info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //update post status only
    public function updatepoststatus(Request $request)
    {

        $postInfo = Post::findOrFail($request->postid);
        $postInfo->post_status = $request->status;
        $postInfo->save();
        if ($postInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update post
    public function updatepost(Request $request) {

        $this->validate($request, [
            'post_tittlee' => ['required', 'string', 'max:255'],
            'post_descriptionn' => ['required', 'string', 'max:500'],
            'post_imagee' => 'mimes:webp|nullable|max:5120', // max 5120kb
            'post_status' => 'required',

        ]);

        $postInfo = Post::findOrFail($request->postid);
        $postInfo->post_tittle = $request->input('post_tittlee');
        $postInfo->post_description = $request->input('post_descriptionn');
        $postInfo->post_status = $request->input('post_status');

        if ($request->hasFile('post_imagee')) {
            $destination_path = 'storage/uploads/post_images/' . $postInfo->post_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('post_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('post_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/post_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.webp';
        }

        if ($request->hasFile('post_imagee')) {

            $postInfo->post_image = $fileNamestoStore;
        }

        $postInfo->update();

        if ($postInfo) {
            return response()->json([
                'message' => 'Successifully post info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }


    //function to update anoucement status only
    public function updateanouncementstatus(Request $request){

        $anouncementInfo = Anouncement::findOrFail($request->anouncement_id);
        $anouncementInfo->status = $request->status;
        $anouncementInfo->save();
        if ($anouncementInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200

            ]);
        } else {
            return response()->json([
                'message' => 'Inernal Server Error',
                'code' => 500
            ]);
        }
    }

    //function to update anouncement info from db
    public function updateanounce(Request $request){
        
        $this->validate($request, [
            'tittlee' => ['required', 'string', 'max:255'],
            'file_namee' => 'mimes:pdf|nullable|max:5120', // max 5120kb
            'status' => 'required',

        ]);

        $anouncementInfo = Anouncement::findOrFail($request->anoucementId);
        $anouncementInfo->tittle = $request->input('tittlee');
        $anouncementInfo->status = $request->input('status');

        if ($request->hasFile('file_namee')) {
            $destination_path = 'storage/uploads/anouncement_docs/' . $anouncementInfo->file_name;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('file_namee');
            //Get filename with extension
            $filenameWithExt = $request->file('file_namee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/anouncement_docs', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noFile.pdf';
        }

        if ($request->hasFile('post_imagee')) {

            $anouncementInfo->file_name = $fileNamestoStore;
        }

        $anouncementInfo->update();

        if ($anouncementInfo) {
            return response()->json([
                'message' => 'Successifully anouncement info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update minister description status only
    public function updateministerstatus(Request $request){

        $anouncementInfos = MinisterComment::findOrFail($request->descriptionId);
        $anouncementInfos->status = $request->status;
        $anouncementInfos->save();
        if ($anouncementInfos) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update minister description
    public function updateministerdescription(Request $request){

        
        $this->validate($request, [
            'minister_namee' => ['required', 'string', 'max:255'],
            'minister_titlee' => ['required', 'string', 'max:255'],
            'descriptionn' => ['required', 'string', 'max:500'],
            'minister_imagee' => 'mimes:webp|nullable|max:5120', // max 5120kb
            'status' => 'required',

        ]);

        $anouncementInfos = MinisterComment::findOrFail($request->descriptionid);
        $anouncementInfos->minister_name = $request->input('minister_namee');
        $anouncementInfos->minister_title = $request->input('minister_titlee');
        $anouncementInfos->description = $request->input('descriptionn');
        $anouncementInfos->status = $request->input('status');

        if ($request->hasFile('minister_imagee')) {
            $destination_path = 'storage/uploads/anouncement_docs/' . $anouncementInfos->minister_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('minister_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('minister_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/minister_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.webp';
        }

        if ($request->hasFile('minister_imagee')) {

            $anouncementInfos->minister_image = $fileNamestoStore;
        }

        $anouncementInfos->update();

        if ($anouncementInfos) {
            return response()->json([
                'message' => 'Successifully anouncement info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    // functin to update about us status only
    public function updateaboutstatus(Request $request){

        $aboutUsInfo = AboutUs::findOrFail($request->about_id);
        $aboutUsInfo->status = $request->status;

        $aboutUsInfo->save();
        if ($aboutUsInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }     
    }

    //Function to update about us Info
    public function updateboutus(Request $request){
         
        $this->validate($request, [
            'titlee' => ['required', 'string', 'max:255'],
            'descriptionn' => ['required', 'string', 'max:500'],
            'status' => 'required',
        ]);

        $aboutUsInfo = AboutUs::findOrFail($request->aboutId);
        $aboutUsInfo->title = $request->input('titlee');
        $aboutUsInfo->description = $request->input('descriptionn');
        $aboutUsInfo->status = $request->input('status');

        $aboutUsInfo->update();

        if ($aboutUsInfo) {
            return response()->json([
                'message' => 'Successifully about us info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //function to update leader status only
    public function updateleaderstatus(Request $request){

        $leaderInfo = Leadership::findOrFail($request->leaderId);
        $leaderInfo->status = $request->status;
        $leaderInfo->save();
        if ($leaderInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Internal server Error',
                'code' => 500
            ]);
        }

    }

    //Function to update leaders info to the Db
    public function updateleader(Request $request){
        $this->validate($request, [
            'namee' => ['required', 'string', 'max:255'],
            'rolee' => 'required',
            'designationn' => 'required',
            'descriptionn' => ['required', 'string', 'max:500'],
            'leader_imagee' => 'mimes:webp|nullable|max:5120', // max 5120kb
            'status' => 'required',
            
        ]);

        $leaderInfo = Leadership::findOrFail($request->leaderId);
        $leaderInfo->name = $request->input('namee');
        $leaderInfo->role = $request->input('rolee');
        $leaderInfo->designation = $request->input('designationn');
        $leaderInfo->description = $request->input('descriptionn');
        $leaderInfo->status = $request->input('status');

        if ($request->hasFile('leader_imagee')) {
            $destination_path = 'storage/uploads/leader_images/' . $leaderInfo->leader_image;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('leader_imagee');
            //Get filename with extension
            $filenameWithExt = $request->file('leader_imagee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/leader_images', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.webp';
        }

        if ($request->hasFile('leader_imagee')) {

            $leaderInfo->leader_image = $fileNamestoStore;
        }

        $leaderInfo->update();

        if ($leaderInfo) {
            return response()->json([
                'message' => 'Successifully leader info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Function to update videos status only
    public function updatevideostatus(Request $request){
        
        $videoInfo = Video::findOrFail($request->videoid);
        $videoInfo->status = $request->status;
        $videoInfo->save();
        if ($videoInfo) {
            return response()->json([
                'message' => 'Status updated successfully.',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
        
    }

    //Function to update Video info from db.
    public function updatevideo(Request $request){

        $videoInfo = Video::findOrFail($request->videoId);
        $videoInfo->tittle = $request->input('tittlee');
        $videoInfo->link = $request->input('linkk');
        $videoInfo->status = $request->input('status');

        $videoInfo->update();
        if ($videoInfo) {
            return response()->json([
                'message' => 'Successifully video info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
        

    }

    //Function for updating department service status only.
    public function updatedepartmentservicestatus(Request $request){
        $departmentInfo = DepartmentService::findOrFail($request->dptserviceId);
        $departmentInfo->status = $request->status;
        $departmentInfo->save();
        if ($departmentInfo) {
            return response()->json([
                'message' => 'Status Updated Successfully',
                'code' => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500,
            ]);
        }
        
    }

    //Function for Updating Deaprtment services.
    public function updatedepartmentservice(Request $request){

        $departmentInfo = DepartmentService::findOrFail($request->dptmntId);
        $departmentInfo->departmentName = $request->input('departmentNamee');
        $departmentInfo->service = $request->input('servicee');
        $departmentInfo->status = $request->input('status');

        $departmentInfo->update();
        if ($departmentInfo) {
            return response()->json([
                'message' => 'Successfull Department Service Info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
        

    }

    //Function for updating upload document status only
    public function updatedocumentstatus(Request $request){

        $docsInfo = UploadedDocs::findOrFail($request->docsId);
        $docsInfo->status = $request->status;
        $docsInfo->save();
        if ($docsInfo) {
            return response()->json([
                'message' => 'Status Updated Successfully',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
        
    }

    //Function for Updating uplpoad documents
    public function updatedocument(Request $request){

        $this->validate($request, [
            'fileNamee' => ['required', 'string', 'max:255'],
            'departmentNamee' => ['required'],
            'documentt' => 'mimes:pdf|max:5120', // max 5120kb
            
        ]);

        $docsInfo = UploadedDocs::findOrFail($request->docId);
        $docsInfo->fileName = $request->input('fileNamee');
        $docsInfo->departmentName = $request->input('departmentNamee');
        $docsInfo->status = $request->input('status');

        if ($request->hasFile('documentt')) {
            $destination_path = 'storage/uploads/document_files/' . $docsInfo->document;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('documentt');
            //Get filename with extension
            $filenameWithExt = $request->file('documentt')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/document_files', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noFile.pdf';
        }

        if ($request->hasFile('documentt')) {

            $docsInfo->document = $fileNamestoStore;
        }

        $docsInfo->update();

        if ($docsInfo) {
            return response()->json([
                'message' => 'Successifully document info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }
    }

    //Fuction for updating picture status only.
    public function updatepicturestatus(Request $request){

        $pictureInfo = PictureCollection::findOrFail($request->picId);
        $pictureInfo->status = $request->status;
        $pictureInfo->save();
        if ($pictureInfo) {
            return response()->json([
                'message' => 'Status Updated Successfully',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Internal Server Error',
                'code' => 500
            ]);
        }
        
    }

    //Function to update picture for about us page
    public function updatepicture(Request $request){

        $this->validate($request, [
            'pictureNamee' => ['required', 'string', 'max:255'],
            'positionn' => ['required'],
            'picturee' => 'mimes:webp|nullable|max:5120', // max 5120kb
            
        ]);

        $pictureInfo = PictureCollection::findOrFail($request->pictureId);
        $pictureInfo->pictureName = $request->input('pictureNamee');
        $pictureInfo->position = $request->input('positionn');
        $pictureInfo->status = $request->input('status');

        if ($request->hasFile('picturee')) {
            $destination_path = 'storage/uploads/aboutpictures/' . $pictureInfo->picture;
            if (File::exists($destination_path)) {
                File::delete($destination_path);
            }
            //$request =request(); 
            $file = $request->file('picturee');
            //Get filename with extension
            $filenameWithExt = $request->file('picturee')->getClientOriginalName();
            //Get file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //File Extension
            $extension = $file->getClientOriginalExtension();

            $fileNamestoStore = $filename . '_' . time() . '.' . $extension;
            $file->move('storage/uploads/aboutpictures', $fileNamestoStore);
        } else {
            $fileNamestoStore = 'noImage.webp';
        }

        if ($request->hasFile('picturee')) {

            $pictureInfo->picture = $fileNamestoStore;
        }

        $pictureInfo->update();

        if ($pictureInfo) {
            return response()->json([
                'message' => 'Successifully picture info Updated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'Interna Server Error',
                'code' => 500
            ]);
        }

    }

}
