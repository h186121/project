<?php

namespace App\Http\Controllers;

use App\Run;
use Illuminate\Http\Request;


class RunController extends Controller
{

    public function index()
    {
        $run = Run::all();
        return response()->json(['data'=>$run],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Run::create($request->only(['run_number','wells_id', 'phase_wells_id', 'tool_sizes_id']));
        return response()->json(['Mensaje'=>'Run creada','code'=>200],200);
    }

    public function show($id)
    {
        $run= Run::find($id);

        if(!$run){
            return response()->json(['Mensaje'=>'Run '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$run],200);
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
