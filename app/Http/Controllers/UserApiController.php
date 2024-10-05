<?php

namespace App\Http\Controllers;
use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleResourceCollection;


class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function verify(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'nif' => 'required|string',
            'dataNascimento' => 'required|date',
        ]);

        // Search for the citizen by NIF
        $people = People::where('nif', $validatedData['nif'])->first();
      

        // Check if citizen exists
        if (!$people) {
            return response()->json([
                'status' => 'error',
                'message' => 'NIF not found'
            ], 404);
        }
       

        // Check if the name and birthdate match
        if ($people->name === $validatedData['nome'] && $people->birthdate === $validatedData['dataNascimento']) {
            return response()->json([
                'status' => 'success',
                'message' => 'All information matches!'
            ], 200);
        }

        // If name or birthdate don't match
        return response()->json([
            'status' => 'error',
            'message' => 'The provided information does not match our records.'
        ], 400);
    }
    public function index() : PeopleResourceCollection
    {
        return new PeopleResourceCollection(resource: People::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
