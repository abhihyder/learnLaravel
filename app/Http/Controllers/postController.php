<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; //Must be have to include "use DB;"

class postController extends Controller
{
   
    public function createPost(){ //redirect to post createable page
        return view ('pages.createPost');
    }

    public function publishPost(Request $request){ // Received data from createPost page and insert to database

        $validateData = $request->validate ([ //form validation
            'title'     => 'required|max:255|min:4',
            'details'   => 'required',
            'img'       => 'mimes:jpeg,jpg,png,PNG | max:30000',
        ]);
       
        $img=$request->file('img');
        if($img){
            $imgName= date("d.m.y-H_i_s");
            $ext=$img->getClientOriginalExtension();
            $fullName= $imgName.'.'.$ext;
            $uploadPath='public/asset/img/';
            $imgUrl=$uploadPath.$fullName;
            $uploadTo=$img->move($uploadPath, $fullName);
            $data=array('titles'=>$request->title, 'details'=>$request->details, 'img'=>$imgUrl);
            $sql=DB::table('posts')->insert($data); // insert to database with "query builder".
            return redirect()->back();
        }
        else{
            $data=array('titles'=>$request->title, 'details'=>$request->details);
            $sql=DB::table('posts')->insert($data); // insert to database with "query builder".
            return redirect()->back();
        }
        
     
    }

    public function readPost(){ // Fetch all data from db table.
        $sql=DB::table('posts')->get();
        //return view ('pages.post', compact('sql'));
        return view('pages.post')->with('sql', $sql);
        //return response()->json($sql);
    }

    public function singlePost($id){
        $sql = DB::table('posts')->where('id', $id)->first();
        return view('pages.singlePost')->with('sql', $sql);
    }

    public function editPost($id){
        $sql = DB::table('posts')->where('id', $id)->first();
        return view('pages.editPost')->with('sql', $sql);
    }

    public function updatePost(Request $request, $id){
       
        $validateData = $request->validate ([ //validation
            'title' => 'required|max:255|min:4',
            'details' => 'required',
            'img' => 'required| mimes:jpeg,jpg,png,PNG | max:3000',
        ]);

        $data=array('titles'=>$request->title, 'details'=>$request->details, 'img'=>$request->img);
        $sql=DB::table('posts')->where('id',$id)->update($data); // update from db table with "query builder".
        return redirect()->route('blog');
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
