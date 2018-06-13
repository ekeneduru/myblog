@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
   @include('partials.sidebar')
    <div class="col-md-9">
      
      
     <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-4">
            <div class="card mb-4 box-shadow" style="height: 405px;">
                <a href="{{ route('home.detail', ['id' => $blog->id]) }}" >
              <img class="card-img-top"  alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"  src={{ URL::to('/') }}/uploads/{{$blog->photourl}} data-holder-rendered="true">
            </a>
              <div class="card-body">
              <p class="card-text">{{$blog->title}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{ route('home.detail', ['id' => $blog->id]) }}" class="btn btn-sm btn-outline-secondary">View</a>
                    
                  </div>
                  <small class="text-muted">{{date_format($blog->created_at,"d-M-Y")}}</small>
                  <small class="text-muted">{{ $blog->user->firstname}} {{$blog->user->lastname}}</small>
                </div>
              </div>
            </div>
          </div>
      @endforeach
     </div>
     <div class="row">
            <div class="col-md-12 text-center">
                {{ $blogs->links() }}
            </div>
     </div>
   
    </div>
      
   
</div>
  </div>
@endsection
