<?php

namespace App\Http\Controllers;

use App\Book;
use App\Writer;
use App\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('status',1)->get();
        $categories = Category::where('status',1)->get();
        $writers = Writer::where('status',1)->get();
        return view('backend.book.index',compact('books','categories','writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->category_id = $request->category_id;
        $book->writer_id = $request->writer_id;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->description = $request->description;
        if($request->image){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/books'),$imageName);
            $book->image = $imageName;
        }
        $book->save();
        Alert::alert('Success', 'Book Added Successfully', 'success');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return $book;
        $book->category_id = $request->category_id;
        $book->writer_id = $request->writer_id;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->description = $request->description;
        if($request->image){
            if($book->image){
                $path = public_path('images/books/'.$book->image);
                unlink($path);
            }
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/books'),$imageName);
                $book->image = $imageName; 
        }
        $book->update();
        Alert::alert('Success', 'Book Updated Successfully', 'success');
        return redirect()->route('books.index');
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
        $book = Book::findOrFail($id);
        $book->category_id = $request->category_id;
        $book->writer_id = $request->writer_id;
        $book->title = $request->title;
        $book->price = $request->price;
        $book->description = $request->description;
        if($request->image){
            if($book->image){
                $path = public_path('images/books/'.$book->image);
                unlink($path);
            }
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/books'),$imageName);
                $book->image = $imageName; 
        }
        $book->update();
        Alert::alert('Success', 'Book Updated Successfully', 'success');
        return redirect()->route('books.index');
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
