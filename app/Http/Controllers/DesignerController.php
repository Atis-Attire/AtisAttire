<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function designers(){
        $designers =  Designer::all();
        return $designers;
    }

    public function designer(Designer $designer) {
        return view('pages/designer', ['designer' => $designer->load([
            'designer',
        ])]);
    }

    public function deleteDesigner($id)
    {
        Designer::find($id)->delete();
    }

    public function newDesigner(Request $request)
    {
        $designer  = new Designer();
        $designer ->name = $request->name;
        $designer ->save();
    }
    public function updateDesigner(Request $request, $id)
    {
        $designer = Category::find($id);
        $designer ->name = $request->name;
        $designer ->save();
    }

}
