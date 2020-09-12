<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Work;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function aboutus(){
        return view('about');
    }

    public function ourteam(){
        return view('team');
    }

    public function ourworks()
    {
        $works = Work::orderby('created_at','desc')->get();
        return view('works',compact('works'));
    }

    public function ourblog()
    {
        $posts = Blog::where('status',1)->orderby('created_at','desc')->get();
        $mostpopular = Blog::where('status',1)->orderby('views','desc')->get();
        return view('blog',compact('posts','mostpopular'));
    }

    public function contactus()
    {
        return view('contact');
    }

    public function submitcontact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        // dd($data);
        $contact = Contact::create($data);
        return redirect()->back()->with('flash_message_success','Thanks for contacting us, you would be contacted shortly!');
    }
}
