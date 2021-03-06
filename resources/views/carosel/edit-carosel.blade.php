@auth 

@extends('layouts.app')
@if(Auth::user()->type == "Main Admin")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Ads Image') }}</div>

                <div class="card-body">
                    <form method="POST" action="/update-carosel/{{$carosel->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Insert Image</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control form-control-file" id="image" name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <img class="img-thumbnail" src="{{ asset('images/carosel/' . $carosel->image) }}" />
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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