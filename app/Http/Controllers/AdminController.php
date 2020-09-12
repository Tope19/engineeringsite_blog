<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        return view('dashboard.home');
    }

    public function logout(){
        Session::flush();
        return redirect()->route('index');
    }

    public function setting(){
        return view('dashboard.setting');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::get();
        return view('dashboard.admin.view',compact('admins'));
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
        $request->validate([
            'name' => 'required|unique:users|string',
            'email' => 'required|unique:users|email|string',
            'phone' => 'required|unique:users',
        ]);
        $password = random_int(1000000,999999999);
        // dd($password);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'role' => "admin",
            'password' => Hash::make('password'),
            // 'password' => Hash::make($password),
        ]);

        // Send password to the email of the new Admin

        return redirect()->back()->with('flash_message_success','Admin added successfully');
    
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
        $user = User::findorfail($id);

        if($user->email == 'superuser@mail.com'){
            return redirect()->back()->with('flash_message_error','Sorry, you cant update this Admin!');

        }

        if($request['name'] == $user->name){
            $name = 'required';
        }
        else{
            $name = 'required|unique:users|string';
        }
        if($request['email'] == $user->email){
            $email = 'required';
        }
        else{
            $email = 'required|unique:users|email|string';
        }
        if($request['phone'] == $user->phone){
            $phone = 'required';
        }
        else{
            $phone = 'required|unique:users';
        }

        $request->validate([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'role' => 'required'
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->role = $request['role'];
        $user->save();

        return redirect()->back()->with('flash_message_success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('I go delete you o');
        $admin = User::findorfail($id);
        if($admin->email == 'superuser@mail.com' || $id == 1){
            return redirect()->back()->with('flash_message_error','Sorry, you cant delete the Super Admin!!!');
        }
        if($admin->id == Auth::user()->id){
            return redirect()->back()->with('flash_message_error','Sorry, you cant delete yourself!');
        }
        $count = User::whereRole('admin')->count();

        if($count < 2){
            return redirect()->back()->with('flash_message_error','Sorry, you cant delete the only Active admin left');
        }
        $admin->delete();
        return redirect()->back()->with('flash_message_success','Admin deleted successfully');
    }

}
