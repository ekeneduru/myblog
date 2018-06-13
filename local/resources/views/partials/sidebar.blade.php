<div class="col-md-3">
        <div class="col-md-12">
           <div class="card mb-4 box-shadow">
              <div class="list-group">
                 @foreach ($categories as $category )
              <a href="{{ route('home.category', ['id' => $category->id]) }}" class="list-group-item step-2-menu {{$category->name=="News"?"active":""}}" data-for=".step-2">
                   <h4 class="list-group-item-heading ">{{$category->name}}
                    <span class="pull-right"><i class="glyphicon glyphicon-chevron-right"></i></span>
                   </h4>
                  </a>
                 @endforeach
              </div>
           </div>
           
        </div>

           <div class="col-md-12">
                <div class="card mb-4 box-shadow">
                   <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                       <div class="d-flex justify-content-between align-items-center">
                         <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                         </div>
                         <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
    
              <div class="col-md-12">
                    <div class="card mb-4 box-shadow">
                      
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                          </div>
                          <small class="text-muted">9 mins</small>
                        </div>
                      </div>
                  </div>
              </div>
      
       
       
   
</div>  