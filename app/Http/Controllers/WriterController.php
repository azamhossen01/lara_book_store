<?php

namespace App\Http\Controllers;

use App\Writer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();
        return view('backend.writer.index',compact('writers'));
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
        $writer = new Writer;
        $writer->name = $request->name;
        $writer->email = $request->email;
        $writer->phone = $request->phone;
        $writer->dob = $request->dob;
        $writer->address = $request->address;
        $writer->description = $request->description;
        // if($request->image){
        //     $imageName = time().'.'.request()->image->getClientOriginalExtension();
        //     request()->image->move(public_path('images/writers'), $imageName);
        // $writer->image = $imageName;
        // }

        if($request->image){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/writers'),$imageName);
            $writer->image = $imageName;
        }
        $writer->save();
        if($writer->id > 0){
            Alert::alert('Success', 'Writer Added Successfully', 'success');
            return redirect()->route('writers.index');
        }else{
            Alert::alert('Error', 'Writer Added Fail', 'error');
            return redirect()->route('writers.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $writer = Writer::findOrFail($id);
        return $writer;
        $writer->name = $request->name;
        $writer->email = $request->email;
        $writer->phone = $request->phone;
        $writer->dob = $request->dob;
        $writer->address = $request->address;
        $writer->description = $request->description;
        if($request->image){
            if($writer->image){
                $path = public_path('images/writers/'.$writer->image);
                unlink($path);
            }
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/writers'),$imageName);
                $writer->image = $imageName; 
        }
        $writer->update();
        Alert::alert('Successs', 'Writer Updated Successfully', 'success');
            return redirect()->route('writers.index');
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
        $writer = Writer::findOrFail($id);
        $writer->name = $request->name;
        $writer->email = $request->email;
        $writer->phone = $request->phone;
        $writer->dob = $request->dob;
        $writer->address = $request->address;
        $writer->description = $request->description;
        if($request->image){
            if($writer->image){
                $path = public_path('images/writers/'.$writer->image);
                unlink($path);
            }
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/writers'),$imageName);
                $writer->image = $imageName; 
        }
        $writer->update();
        Alert::alert('Successs', 'Writer Updated Successfully', 'success');
            return redirect()->route('writers.index');
        
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

    // public function change_writer_status($writer_id){
    //     $status = $_GET['status']?0:1;
    //     // return $status;
    //     $writer = Writer::findOrFail($writer_id);
    //     $writer->status = $status;
    //     $writer->update();
    //     return response()->json(['message' => 'User status updated successfully.']);
    // }
    public function change_writer_status(Request $request){
        $writer = Writer::findOrFail($request->writer_id);
        $writer->status = $request->status;
        $writer->update();
        return response()->json(['message'=>'Writer status updated successfully']);
    }
}
