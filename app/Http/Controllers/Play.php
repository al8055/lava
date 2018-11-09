<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Play extends Controller
{
    public function ask(){
        return view('myviews.playview');
    }
    
    public function showme(Request $req){
          
        $req->validate(
            [
                'fname' => 'required|alpha|max:10',
                'lname' => 'required|alpha|max:25',
                'position' => 'required|alpha|max:50',
                'age' => 'required|integer',
                'salary' => 'required|integer'
            ]
        );
        
        return view('myviews.playresponce')->with('data', $req->except('_token'));
    }
    
    
    
    public function fupload(Request $req){
        if($req->hasFile('filename') && $req->file('filename')->isValid()){
            $req->filename->storeAs('public', 'test_upload.png');
            return view('myviews.playresponce')->with('data', $req->filename);
        }
        return 'NO file';
    }
}
