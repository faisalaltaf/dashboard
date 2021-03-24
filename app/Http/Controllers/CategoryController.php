<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        // [data viewn show]
        $result['data'] = Category::all();
        return view('Productadd.category', $result);
    }

    public function manage_category()
    {
        return view('Productadd.manage_category');
    }

    public function category_manage_process(Request $request )
    {
        $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);

        $model = new Category();
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->save();
        $request->session()->flash('message', 'Category inserted');
        return redirect('home/Category');
    }
    public function delete(Request $request,$id)
    {
        $model = Category::find($id);
        $model->delete();
        $request->session()->flash('message', 'Category Deleted');
        return redirect('home/Category');
    }

}
