<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use JWTAuth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::all();
        if ($author && $author-> count() > 0) {
            return response(['message' => 'Show data success.', 'data' => $author], 200);
        }else{
            return response(['message' => 'Data not found.', 'data' => $author], 404);
        }
    }
    public function __construct(){
        $this->middleware('auth:api');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Author::create([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->author,
            'gender' => $request->publisher,
            'email' => $request->date_of_issue,
            'hp' => $request->hp,
            'create_at' => $request->create_at,
            'update_at' => $request->update_at,
        ]);
        
        return response(['message' => 'Show data success.', 'data' => $author], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}