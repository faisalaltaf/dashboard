@extends('layouts.app')
@section('content')
<h2 class="massage" style="color: gray; ">
    {{session('message')}}
</h2>

<h2><b>
        Category
    </b>
</h2>
<div class="p-4">
    <a href="
    {{route('manage_category')}}
    ">
        <button type="button" class="btn btn-primary">Add Cagetory</button>
    </a>
</div>

<div class="row m-t-30 container">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-striped ">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Category Slug</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->category_name}}</td>
                        <td>{{$list->category_slug}}</td>

                        <td>
                        <a href="{{url('home/Category/delete/')}}/{{($list->id)}}">
                        <button type="button" class="btn btn-danger">delete</button>
                        </a>
                        <a href="{{url('home/manage_category/')}}/{{($list->id)}}">
                        <button type="button" class="btn btn-success">Edit</button>
                        </a>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection