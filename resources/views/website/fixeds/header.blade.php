  <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Sun-Thus 09:00-17:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>01714-797978</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>




      <div style="margin-left:150px; margin-top:8px;">
        <div class="row">
          <div class="col-md-11">
           @if(session('batch'))
   <div class="alert alert-success"  style="text-align: center"; >
    {!! session('batch')!!}
</div>
@endif
@if(session('error'))
    <div class="alert alert-danger" style="text-align: center";>
           {!! session('error') !!}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-danger" style="text-align: center";>
<ul>
    @foreach ($errors->all() as $error)
        <li >{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
          </div>
        </div>
      </div>








    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Co-Operative Society</h2></a>




          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>






          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('user') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.about')}}">About Us</a>
              </li>
              @if (auth()->user())
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.service') }}">Our Services</a>
              </li>
              @else
                <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#login1">Our Services </a>
              </li>
@endif
               <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>












  @if (auth()->user())
                           <li class="nav-item">
                <a class="nav-link" href="{{route('user.logout')}}">logout</a>
              </li>
                           <li class="nav-item">
                <a class="nav-link" href="contact.html">{{ucwords(auth()->user()->name)}}</a>
              </li>
                    @else
                        <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#login">Login </a>
              </li>
                <li class="nav-item">
               <a class="nav-link" data-toggle="modal" data-target="#registration"> Registration</a>
              </li>


                    @endif


            </ul>
          </div>
        </div>
      </nav>
    </header>



















    <!-- Registration Modal -->
<div class="modal fade" style="margin-top:120px"; id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.registration')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Enter User Name:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label>Enter User Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Enter User Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Enter User Mobile:</label>
                        <input type="text" class="form-control" name="mobile" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Registration</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>




<!-- login Modal -->
<div class="modal fade"  style="margin-top:120px"; id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('user.do.login')}}" method="POST">
                                 @csrf
                    <div class="form-group">
                        <label>Enter User Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Enter User Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                       <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>

                </form>
            </div>

        </div>
    </div>
</div>












<div class="modal fade"  style="margin-top:120px"; id="login1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <h5 style="margin-top:10px; text-align:center;" >First login then access this page</h5>
            <div class="modal-header">

                <h3 class="modal-title" id="exampleModalLabel">User Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('user.do.login')}}" method="POST">
                                 @csrf
                    <div class="form-group">
                        <label>Enter User Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Enter User Password:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                       <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>

                </form>
            </div>

        </div>
    </div>
</div>







