@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Blog') }}</div>
                <br>
                <div class="col-md-8">
                  @include('partials.error')
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus> --}}
                                <textarea  name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" cols="50" rows="10" id="description" required autofocus></textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photourl" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input  type="file" name="photourl" id="file">
                                @if ($errors->has('photourl'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('photourl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
    
                                <div class="col-md-6">
                                   
                                        <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                              </select> 
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="ispublished" class="col-md-4 col-form-label text-md-right">{{ __('Publish') }}</label>
        
                                    <div class="col-md-6">
                                        <input  type="checkbox" name="ispublished" id="file">
                                        @if ($errors->has('ispublished'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('ispublished') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
