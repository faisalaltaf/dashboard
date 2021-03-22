@extends('layouts.app')

@section('content')
<h2><b>
        Category
    </b>
</h2>
<div class="p-4">
    <a href="{{route('category')}}">
        <button type="button" class="btn btn-success PY-4">Show Data</button>
    </a>
</div>

<div class="col-lg-6 container">
    <div class="card">
        <div class="card-header">Manage Category name faisal</div>
        <div class="card-body">
{{session('massage')}}
            <form action="{{ route('category.insert') }}" method="post">
            @csrf

                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category Add</label>
                    <input id="cc-pament" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    <div class="alert alert-primary" role="alert">

  
</div>
                    <div class="alert alert-primary" role="alert">
{${massage}}
  
</div>
</div>
                    <div class="alert alert-primary" role="alert">
{${massage}}
  
</div>
 @error('category_name')


                @enderor
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Slug</label>
                    <input id="cc-name" name="cageory_slug" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                    @error('category_slug')
{{$massage}}
                @enderor
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                </div>


                <div>
                    <button id="payment-button"  type="submit" class="btn btn-lg btn-info btn-block">
                        submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection