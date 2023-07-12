<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function index(){
        return view('books.index');
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request,$id){
        $request -> validate ([
            'title' =>'required|min:3',
            'author' =>'required|min:3',
            'published'=>'required',
            'description' =>'required',
        ]);

        $book=new Book();
        $book->title = $request->title;
        $book->author =$request ->author;
        $book->description = $request->description;

        $book->save();
        return redirect()->route('index');

        

    }
}
