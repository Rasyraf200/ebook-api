<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
        if($book &&  $book->count()>0){
            return response(['message'=>'Show data success.','data'=>$book],200);
        }else{
            return response(['message'=>'Data not found.','data'=> null],404);
        }
    }

    public function store(Request $request)
    {
        $book = Book::create([
            "title" => $request->title,
            "description" => $request->description,
            "author" => $request->author,
            "publisher" => $request->publisher,
            "date_of_issue" => $request->date_of_issue
        ]);
        return response(['message'=>'Create data success.','data'=>$book],201);
    }

    public function show($id)
    {
        $book = Book::find($id);
        if($book &&  $book->count()>0){
            return response(['message'=>'Show data success.','data'=>$book],200);
        }else{
            return response(['message'=>'Data not found.','data'=> null],404);
        }
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if($book){
            $book->title = $request->title;
            $book->description = $request->description;
            $book->author = $request->author;
            $book->publisher = $request->publisher;
            $book->date_of_issue = $request->date_of_issue;

            $book->save();
            return response(['message'=>'Update data success.','data'=>$book],200);
        }else{
            return response(['message'=>'Update data failed.','data'=> null],404);
        }
        
    }

    public function destroy($id)
    {
        //return Book::destroy($id);
        $book = Book::find($id);
        if($book){
            $book->delete();
            return response([],204);
        }else{
            return response(['message'=>'Remove data failed.','data'=> null],406);
        }
    }
}
