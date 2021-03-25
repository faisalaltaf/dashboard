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

    public function manage_category(Request $request,$id='')
    {
if($id>0){
    $arr =Category::where(['id'=>$id])->get();

    $result['category_name']=$arr['0']->category_name;
    $result['category_slug']=$arr['0']->category_slug;
    $result['id']=$arr['0']->id;
}else{
    $result['category_name']='';
    $result['category_slug']='';
    $result['id']='0';
}

        return view('Productadd.manage_category',$result);
    }

    public function category_manage_process(Request $request  )
    {

        // return $request->post();
        $request->validate([

            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,category_slug,' .$request->post('id'),
        ]);

        if($request->post('id')>0){
            $model=Category::find($request->post('id'));
            $msg='Category updated';
        }else{  
            $model=new Category();
            $msg='Category inserted';

        }

        $model = new Category();
        $model->category_name = $request->post('category_name');
        $model->category_slug = $request->post('category_slug');
        $model->save();
        $request->session()->flash('message', $msg);
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
