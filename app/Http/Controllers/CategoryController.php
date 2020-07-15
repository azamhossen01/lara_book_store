<?php

namespace App\Http\Controllers;

use App\Book;
use App\Writer;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        
        return view('backend.category.index',compact('categories'));
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
        // return $request;
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        Alert::alert('Success', 'Category Added Successfully', 'success');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return $category;
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
        $category = Category::findOrFail($id);
        // return $category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();
        Alert::alert('Success', 'Category Updated Successfully', 'success');
        return redirect()->route('categories.index');
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

    public function change_category_status($cat_id){
        $status = $_GET['status']?0:1;
        // return $status;
        $category = Category::findOrFail($cat_id);
        $category->status = $status;
        $category->update();
        return response()->json(['message' => 'User status updated successfully.']);
    }

    public function all_categories(){
        $categories = Category::orderBy('id','desc')->get();
        // return $categories;
        return view('frontend.all_categories',compact('categories'));
    }
}
