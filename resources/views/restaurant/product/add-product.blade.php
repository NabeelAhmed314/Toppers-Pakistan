@auth 


@extends('layouts.app')

@if(Auth::user()->type == "Main Admin")


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/store-product') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="restaurant" class="col-md-4 col-form-label text-md-right">Restaurant </label>
                            <div class="col-md-6">
                                <select class="form-control" id="restaurant" name="restaurant">
                                    @for ($i = 0; $i < count($restaurants); $i++)
                                        <option value="{{$restaurants[$i]->id}}">{{$restaurants[$i]->name}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subCategory" class="col-md-4 col-form-label text-md-right">Sub Category </label>
                            <div class="col-md-6">
                                <select class="form-control" id="subCategory" name="subCategory">
                                    @for ($i = 0; $i < count($subCategories); $i++)
                                        <option value="{{$subCategories[$i]->id}}">{{$subCategories[$i]->name}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Product Quantity') }}</label>

                            <div class="col-md-3">
                                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="unit" name="unit">
                                    @for ($i = 0; $i < count($units); $i++)
                                        <option value="{{$units[$i]->id}}">{{$units[$i]->name}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Product Unit Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Insert Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control form-control-file" id="image" name="image">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@else
<script>window.location = "/home";</script>
@endif

@else 
<script>window.location = "/login";</script>
@endauth 
