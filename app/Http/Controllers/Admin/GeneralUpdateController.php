<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anouncement;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class GeneralUpdateController extends Controller
{
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
            'slide_imagee' => 'mimes:webp|nullable|max:5120', // max 5120kb
            'statuss' => 'required',

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
                'message' => 'Successifully member info Updated',
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
                'message' => 'Successifully member info Updated',
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
}
