@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input value="{{ $key }}" type="text"  name="search" class="form-control " placeholder="Search Member id">
                        <br>
                       <button type="submit" class="btn btn-info">Search</button>
                      </div>
                    </form>

    <h1  style="text-align:center;"><i class="fa fa-angle-right">User  Lists</i></h1>
<a  class="btn btn-info "  data-toggle="modal" data-target="#registration">
    Add User
</a>

   </header>
            </section>

             @if($key)
    <div class="alert alert-info" style="text-align:center;">
            <h4>You are searching for:&nbsp {{ $key }}&nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $users->count() }}</h4>
    </div>
     @endif

@if(session('success'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('success')  !!}
    </div>
@endif

 @if(session('error'))
    <div class="alert alert-danger" style="text-align:center;">
           { !! session('error') !! }
    </div>
@endif



   <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
          <th scope="col">#</th>
        <th scope="col">User Name</th>
         <th scope="col">Email Address</th>
         <th scope="col">phn_no</th>
        <th scope="col">Role</th>
        <th>Member ID</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($users  as  $key=>$user)
    <tr>

    <td>{{ $key+1 }}</td>
    <td>{{ $user->name}}</td>
     <td>{{ $user->email}}</td>
    <td>{{ $user->mobile}}</td>
    <td>{{ $user->role}}</td>
       <td>{{ $user->member_id}}</td>
    <td>  <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.user.approve',$user->id) }}">Approve</a></li>
                  <li><a onclick="return confirm('Are You Sure?')" href="{{route('admin.user.cancel',$user->id)}}">Cancel</a></li>
                </ul>
              </div></td>


    {{-- <td><a button class="btn btn-success btn-xs" href="{{route('admin.members.details',$news->id)}}"><i class=" fa fa-check"></i></a></button>
        <a button class="btn btn-primary btn-xs" href="{{ route('admin.members.edit',$news->id) }}"><i class="fa fa-pencil"></i></a></button>
        <a onclick="return confirm('Are You Sure?')"button  class="btn btn-danger btn-xs" href="{{ route('admin.members.delete',$news->id)}}"><i class="fa fa-trash-o"></i></button></a></td> --}}

    </tr>

     @endforeach

</tbody>

  </table>
   {{$users ->links()}}
</div>
</div>

@endsection


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




