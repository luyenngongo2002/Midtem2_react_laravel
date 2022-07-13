<?php

namespace App\Http\Controllers;
use App\Models\Kind;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class KindController extends Controller
{
    public function index()
    {
        //
        $kinds = Kind::all();
        if ($kinds){
            return response()->json($kinds, Response::HTTP_OK);
        }
        else{
            return response()->json([]);
        }
    }
    
}
