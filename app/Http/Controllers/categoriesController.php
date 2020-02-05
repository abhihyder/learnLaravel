<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; //Must be have to include "use DB;"

class categoriesController extends Controller
{
    public function createCat(){
        return view('pages.category.createCategories');
    }

    public function publishCat( Request $request){
        $validateData = $request->validate ([ // form validation
            'name'  => 'required|min:4',
            'slug'  => 'required|min:4',
        ]);

        $data=[
            'name'=> $request->name,
            'slug'=> $request->slug
        ];
        $sql=DB::table('categories')->insert($data);
        return redirect()->back();
    }


}
