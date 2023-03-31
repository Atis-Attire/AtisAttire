<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function pictures()
    {
        $pictures =  Picture::all();
        return $pictures;
    }
    public function picture($id)
    {
        $picture = Picture::find($id);
        return $picture;
    }
    public function deletePicture($id)
    {
        Picture::find($id)->delete();
    }
    public function newPicture(Request $request)
    {
        $picture  = new Picture();
        $picture ->path = $request->path;
        $picture ->modell = $request->modell;
        $picture ->save();
    }
    public function updatePicture(Request $request, $id)
    {
        $picture = Picture::find($id);
        $picture ->path = $request->path;
        $picture ->modell = $request->modell;
        $picture ->save();
    }
}
