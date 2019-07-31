<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    //Testing Routes
    public function index(Request $request)
    {
        dd($request);
    }

    //Incoming Transacction
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'photo_name' => 'required|image|mimes:jpeg,png,jpg|max:300',
        ]);

        if ($files = $request->file('photo_name')) {

            // for save original image
            $ImageUpload = Image::make($files);
            $originalPath = 'public/images/';
            $ImageUpload->save($originalPath . time() . $files->getClientOriginalName());

            // for save thumnail image
            $thumbnailPath = 'public/thumbnail/';
            $ImageUpload->resize(250, 125);
            $ImageUpload = $ImageUpload->save($thumbnailPath . time() . $files->getClientOriginalName());

            $photo = new Photo();
            $photo->photo_name = time() . $files->getClientOriginalName();
            $photo->save();
        }

        $image = Photo::latest()->first(['photo_name']);
        
        return Response()->json($image);
    }
}