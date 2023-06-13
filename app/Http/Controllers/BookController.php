<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{


    public function index(){

        $books = Books::get();

        return view ('books.index', compact('books'));
    }


    public function create(){
        return view ('books.create');
    }


    public function store(Request $request){

        //validate Data
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        // dd($request->all());

        $book = new Books;
        $book->name =$request->name;
        $book->subject =$request->subject;
        $book->description =$request->description;

        $book->save();

        return back()->withSuccess('Books Create Successfully!!');
    }

     public function edit($id){

        // dd($id);
        $books = Books::where('id', $id)->first();

        return view ('books.edit', ['books' => $books]);
    }

     public function update(Request $request, $id){

        // dd($request->all());
        //validate Data
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);

        $books = Books:: where('id',$id)->first();

        // dd($request->all());
        $books->name =$request->name;
        $books->subject =$request->subject;
        $books->description =$request->description;

        $books->update();

        return back()->withSuccess('Books Update Successfully!!');
    }

    public function destroy($id){
        $books = Books::where('id',$id)->first();
        $books->delete();

        return back()->withSuccess('Books Delete Successfully!!');
    }
}