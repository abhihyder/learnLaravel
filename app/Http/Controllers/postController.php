<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class postController extends Controller
{
    public function addCategory(){
        
    }
    public function readCategory(){
        
    }

    public function deleteCategory(){
        
    }

    public function createPost(){
        return view ('pages.createPost');
    }
    public function publishPost(Request $request){

        $validateData = $request->validate ([ //validation
            'title' => 'required|max:255|min:4',
            'details' => 'required',
        ]);

        $data=array('titles'=>$request->title, 'details'=>$request->details);
        $sql=DB::table('posts')->insert($data); // insert to database with "query builder".
        return redirect()->back();
    }

    public function readPost(){
        $sql=DB::table('posts')->get();
        //return view ('pages.post', compact('sql'));
        return view('pages.post')->with('sql', $sql);
    }

    public function singlePost($id){
        $sql = DB::table('posts')->where('id', $id)->first();
        return view('pages.singlePost')->with('sql', $sql);
    }
    public function editPost($id){
        return view('pages.editPost');
    }

    public function deletePost($id){
        $sql = DB::table('posts')->where('id', $id)->delete();
        $notification=array(
            'messege'=> 'Data deleted successfully',
            'alert-type'=> 'danger'
        );
        return redirect()->back()->with($notification);
    }
}
