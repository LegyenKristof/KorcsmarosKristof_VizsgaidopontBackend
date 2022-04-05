<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVizsgaidopontRequest;
use App\Models\Vizsgaidopont;
use Illuminate\Http\Request;

class VizsgaidopontController extends Controller
{
    public function index() {
        $vizsgaidopontok = Vizsgaidopont::all();
        return response()->json($vizsgaidopontok);
    }

    public function store(StoreVizsgaidopontRequest $request) {
        $vizsgaidopont = new Vizsgaidopont($request->all());
        $vizsgaidopont->save();
        return response()->json($vizsgaidopont);
    }
}
