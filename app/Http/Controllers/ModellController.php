<?php

namespace App\Http\Controllers;

use App\Models\Modell;
use App\Models\Designer;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ModellController extends Controller
{
    public function modells()
    {
        $modells =  Modell::all();
        return $modells;
    }

    public function modell($id){
        $modell = Modell::find($id);
        return $modell->load([
            'designer',
            'category',
            'products'
        ]);
    }
    public function deleteModell($id)
    {
        Modell::find($id)->delete();
    }

    public function newModell(Request $request)
    {
        $modell  = new Modell();
        $modell ->name = $request->name;
        $modell ->designer = $request->designer;
        $modell ->describe = $request->describe;
        $modell ->picture = $request->picture;
        $modell ->season = $request->season;
        $modell ->category = $request->category;
        $modell ->price = $request->price;
        $modell ->save();
    }

    public function updateModell(Request $request, $id)
    {
        $modell = Modell::find($id);
        $modell ->name = $request->name;
        $modell ->designer = $request->designer;
        $modell ->describe = $request->describe;
        $modell ->picture = $request->picture;
        $modell ->season = $request->season;
        $modell ->category = $request->category;
        $modell ->price = $request->price;
        $modell ->save();
    }
}
