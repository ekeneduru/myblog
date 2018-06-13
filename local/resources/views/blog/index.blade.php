@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
                @foreach($blogs as $blog)
                 <div class="col-md-4">
                   <div class="card mb-4 box-shadow" style="height: 405px;">
                     <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"  src={{ URL::to('/') }}/uploads/{{$blog->photourl}} data-holder-rendered="true">
                     <div class="card-body">
                     <p class="card-text">{{$blog->title}}</p>
                    
                       <div class="d-flex justify-content-between align-items-center">
                           
                         <div class="btn-group">
                           <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                           <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                           <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button> 
                           <button type="button" class="btn btn-sm btn-outline-secondary">Add Photo</button>
                           <button type="button" class="btn btn-sm btn-outline-secondary">Add Mp3</button>
                        </div>
                         
                       </div>
                       <small class="text-muted">{{$blog->created_at}}</small>
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



@endsection