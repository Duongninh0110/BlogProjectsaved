@Extends('main')
@section ('title', '| HomePage')

@section ('content')
        <div class="row">
            <div class="col-md-12">
            <div class="jumbotron">
              <h1>Welcome to my Blog!</h1>
              <p class="Lead"> Thank you for visitinng. This is my test for my Blog builted with Laravel</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular code</a></p>
            </div>
            </div>       
        </div> <!--end of header.row-->
        <div class="row">   
            <div class="col-md-8";>
                Lorem ipsum... 
                <div class="post">
                    <h3>Post Title</h3>
                    <p> Se lam xong </p>
                    <a href="#" class="btn-btn=btn-primary">Read More</a>
                </div>   
                <hr> 

                 <div class="post">
                    <h3>Post Title</h3>
                    <p> Se lam xong </p>
                    <a href="#" class="btn-btn=btn-primary">Read More</a>
                </div>
                <hr>
                 <div class="post">
                    <h3>Post Title</h3>
                    <p> Se lam xong </p>
                    <a href="#" class="btn-btn=btn-primary">Read More</a>
                </div>
                <hr>
                 <div class="post">
                    <h3>Post Title</h3>
                    <p> Se lam xong </p>
                    <a href="#" class="btn-btn=btn-primary">Read More</a>
                </div>         


            </div>
            <div class="col-md-3 col-md-offset-1 style="background-color:red;">
                Lorem ipsum...
                <h2> sidebar</h2> 
            </div>      
        </div>    
@endsection