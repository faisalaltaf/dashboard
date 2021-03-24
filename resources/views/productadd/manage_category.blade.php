@extends('layouts.app')

@section('content')
<h2><b>
        Category
    </b>
</h2>
<div class="p-4">
    <a href="{{url('home/Category')}}">
        <button type="button" class="btn btn-success PY-4">Show Data</button>
    </a>
</div>

<div class="col-lg-6 container">
    <div class="card">

        <div class="card-header">Manage Category</div>
       
        <div class="card-body">
            <form action="{{ route('category.insert') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category Add</label>
                    <input id="cc-pament" name="category_name" type="text" class="form-control" required>


                </div>
                @error('category_name')
                <div class="alert alert-primary" role="alert">
                    {{$message}}
                </div>


                @enderror
        </div>
        <div class="form-group has-success mx-4 ">
            <label for="cc-name" class="control-label mb-1">Slug</label>
            <input id="cc-name" name="category_slug" type="text" class="form-control cc-name valid" required>
            @error('category_slug')
            <div class="alert alert-primary" role="alert">

                {{$message}}
            </div>
            @enderror
            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
        </div>


        <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                submit
            </button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection