<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::get();
        return view('dashboard.work.view',compact('works'));  
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
        $data = $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'image' => 'required|image',
        ]);
        $user = Auth::user();

        $image = $request->file('image');
        $filename = time().'.'.$image->extension();
        $destinationPath = public_path('/work_images');
        $image->move($destinationPath, $filename);

        $data['user_id'] = $user->id;
        $data['image'] = $filename;

        Work::create($data);

        return redirect()->back()->with('flash_message_success','Project added successfully');

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
        $data = $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'image' => 'nullable|image',
        ]);

        $work = Work::findorfail($id);

        if(!empty($request['image'])){
            $image = $request->file('image');
            $filename = time().'.'.$image->extension();
            $destinationPath = public_path('/work_images');
            $image->move($destinationPath, $filename);
            
            unlink($destinationPath.'/'.$work->image);
        }
        else{
            $filename = $work->image;
        }
        
        $data['image'] = $filename;

        $work->update($data);
        $work->save();

        return redirect()->back()->with('flash_message_success','Project updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::findorfail($id);
        $work->delete();
        return redirect()->back()->with('flash_message_success','Project deleted successfully');
    }
}
