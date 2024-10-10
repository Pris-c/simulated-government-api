<?php

namespace App\Http\Controllers;
use App\Models\Citizen;
use Illuminate\Http\Request;
use App\Http\Resources\CitizenCollection;


class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function verify(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'nif' => 'required|string',
            'birthdate' => 'required|date',
        ]);

        $citizen = Citizen::where('nif', $validatedData['nif'])->first();
      
        if (!$citizen) {
            return response()->json(false, 404);
        }
       
        if ($citizen->name === $validatedData['name'] && $citizen->birthdate === $validatedData['birthdate']) {
            return response()->json(true, 200);
        }

        return response()->json(false, 400);
    }
    
    public function index() 
    {
        return new CitizenCollection(resource: Citizen::paginate());
    }   
}
