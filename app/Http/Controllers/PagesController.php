<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index')->with('title', 'Welcome to MyBlog');
    }
    
    public function about(){
        return view('pages.about')->with('title', 'About MyBlog');
    }
    
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Security', 'SEO']
            );
        return view('pages.services')->with($data);    
    }
}
