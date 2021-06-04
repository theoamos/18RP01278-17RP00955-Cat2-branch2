<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use DB;

class PostController extends Controller
{
    public function addPost()
    {
    	return view('addform');
    }
    public function savePost(Request $request)
    {
        DB::table('posts')->insert([
            'name'=>$request->name,
             'phone'=>$request->phone,
              'purpose'=>$request->purpose,
               'meeting'=>$request->meeting,
                'date'=>$request->date


        ]);
        return back()->with('addform','data added successfully');
    }
    public function postList()
    {
       $posts=DB::table('posts')->get();
       return view('post-list',compact('posts'));


    }
    public function editPost($id)
    {
      
$post=DB::table('posts')->where('id',$id)->first();
return view('edit-post',compact('post'));


    }
    public function deletePost($id)
    {
      
DB::table('posts')->where('id',$id)->delete();
return back()->with('post_delete','data deleted successfully');

    }
}
