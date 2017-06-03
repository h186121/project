<?php

namespace App\Http\Controllers;

use App\Cpi;
use Illuminate\Http\Request;

class CpiController extends Controller
{
    public function index()
    {
       $cpi = Cpi::all();
        return response()->json(['data'=>$cpi],200);
    }

    public function show($id)
    {
        $cpi= Cpi::find($id);

        if(!$cpi){
            return response()->json(['Mensaje'=>'Cpi '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$cpi],200);
    }

    public function store(Request $request)
    {

        Cpi::create($request->only(['number_cpi', 'description', 'status', 's_i', 'tff', 'npt', 's_date', 'e_date', 'runs_id']));
        return response()->json(['Mensaje'=>'Cpi creado','code'=>200],200);
    }
}
