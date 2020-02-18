<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index',compact('blogs'));
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
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->image){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs'),$imageName);
            $blog->image = $imageName;
        }
        $blog->save();
        Alert::alert('Success', 'Blog Added Successfully', 'success');
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog;
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
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        if($request->image){
            if($blog->image){
                $path = public_path('images/blogs/'.$blog->image);
                unlink($path);
            }
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/blogs'),$imageName);
                $blog->image = $imageName; 
        }
        $blog->update();
        Alert::alert('Success', 'Blog Updated Successfully', 'success');
        return redirect()->route('blogs.index');
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

    public function change_blog_status($blog_id){
        $status = $_GET['status']?0:1;
        // return $status;
        $blog = Blog::findOrFail($blog_id);
        $blog->status = $status;
        $blog->update();
        return response()->json(['message' => 'Blog status updated successfully.']);
    }
}
