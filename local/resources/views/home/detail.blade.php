@extends('layouts.app')

@section('content')

<div class="container">

        <div class="row">
                @include('partials.sidebar')
         
          <!-- /.col-lg-3 -->
          
          
          <div class="col-lg-9">
                <div class="card mt-4">
                       
                        <div class="card-body">
                        <h5>Share:</h5>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-whatsapp"></a>
                        </div>
                        
            </div>
            <div class="card mt-4">
              <img class="card-img-top img-fluid" src="{{ URL::to('/') }}/uploads/{{$blog->photourl}}" alt="">
              <div class="card-body">
              <h3 class="card-title">{{$blog->title}}</h3>
                <p class="card-text">{!!$blog->description!!}</p>
              <span class="text-warning">Created On: {{date_format($blog->created_at,"d-M-Y")}}</span>
               <br/>
              <span class="text-success">Created by: {{ $blog->user->firstname}} {{$blog->user->lastname}}</span>
              </div>
              <p></p>
            </div>
            <br>
           
          
                           
               
           
            <!-- /.card -->
  
            {{-- <div class="card card-outline-secondary my-4">
              <div class="card-header">
                Product Reviews
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                <hr>
                <a href="#" class="btn btn-success ">Leave a Review</a>
              </div>
            </div> --}}
            <!-- /.card -->
            
          <!-- /.col-lg-9 -->
  
        </div>
  
      </div>

      @endsection