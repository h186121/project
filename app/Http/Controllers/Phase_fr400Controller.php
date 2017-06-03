<?php

namespace App\Http\Controllers;

use App\Phase_fr400;
use Illuminate\Http\Request;

class Phase_fr400Controller extends Controller
{

    public function index()
    {
        $phase_fr400 = Phase_fr400::all();
        return response()->json(['data'=>$phase_fr400],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Phase_fr400::create($request->only(['description']));
        return response()->json(['Mensaje'=>'Phase_fr400 creado','code'=>200],200);
    }

    public function show($id)
    {
        $phase_fr400= Phase_fr400::find($id);

        if(!$phase_fr400){
            return response()->json(['Mensaje'=>'Phase_fr400 '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$phase_fr400],200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
