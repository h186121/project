<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = Customer::all();
        return response()->json(['data'=>$customer],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Customer::create($request->only(['name']));
        return response()->json(['Mensaje'=>'Customer creado','code'=>200],200);
    }


    public function show($id)
    {
        $customer= Customer::find($id);

        if(!$customer){
            return response()->json(['Mensaje'=>'Customer '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$customer],200);
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
