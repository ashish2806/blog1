<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registraion;
use Validator;
//Call to undefined method Illuminate\Contracts\Validation\Validator::make()

class RegistraionController extends Controller
{
   public function index()
   {
       return Registraion::all();
   }

   public function show(Registraion $id)
   {
       return $id;
   }

   public function store(Request $request)
    {
      //dd($request->all());
      $validator = Validator::make($request->all(), [
             'username' => 'required|unique:registraions|max:255',
        'email' => 'required',
        'phone_number' => 'integer' 
        ]);

        if ($validator->fails()) {
            dd("fff");
        }

       $registraion = Registraion::create($request->all());

       return response()->json($registraion, 201);
   }

   public function update(Request $request, Registraion $id)
   {
     // dd($request->all());
       $id->update($request->all());

       return response()->json($id, 200);
   }

   public function delete(Registraion $id)
   {
       $id->delete();

       return response()->json(null, 204);
   }

}
