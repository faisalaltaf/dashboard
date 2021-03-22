<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Category;

class CategoryController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }
    //
    public function index(){

        return view('Productadd.category');
    }

    public function manage_category()
    {
        return view('Productadd.manage_category');
    }

    public function category_manage_process(Request $request)
    {
        $request->validate([
'category_name'=>'required',
'category_slug'=>'required|unique:categories'
        ]);
        
        $model = new Category();
        $model->category_name=$request->post('category_name');
        $model->category_slug=$request->post('cetegory_slug');
        $model->save();
        $request->session()->flash('massage ','category insert');
        return redirect('Productadd.category');

        

    }
}
