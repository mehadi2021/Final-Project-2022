@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="{{route('admin.members.list')}}" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input value="{{ $key }}" type="text"  name="search" class="form-control " placeholder="Search Member id">
                        <br>
                       <button type="submit" class="btn btn-info">Search</button>
                      </div>
                    </form>

    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Member  Lists</i></h1>
<a href="{{route ('admin.members.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add member
</a>

   </header>
            </section>
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
  @if($key)
    <div class="alert alert-info" style="text-align:center;">
            <h4>You are searching for:&nbsp {{ $key }}&nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $lists->count() }}</h4>
    </div>
     @endif



   <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
          <th scope="col">#</th>
        <th scope="col">Member ID</th>
         <th scope="col">Member Name</th>
        <th scope="col">Account no</th>
         <th scope="col">phn_no</th>
        <th scope="col">Branch Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($lists  as  $key=>$news)
    <tr>

    <td>{{ $key+1 }}</td>
    <td>{{ $news->member_id}}</td>
     <td>{{ $news->name}}</td>
    <td>{{ $news->account_no}}</td>
    <td>{{ $news->phon_no}}</td>
    <td>{{ $news->branch}}</td>


    <td><a button class="btn btn-success btn-xs" href="{{route('admin.members.details',$news->id)}}"><i class=" fa fa-check"></i></a></button>
        <a button class="btn btn-primary btn-xs" href="{{ route('admin.members.edit',$news->id) }}"><i class="fa fa-pencil"></i></a></button>
        <a onclick="return confirm('Are You Sure?')"button  class="btn btn-danger btn-xs" href="{{ route('admin.members.delete',$news->id)}}"><i class="fa fa-trash-o"></i></button></a></td>

    </tr>

     @endforeach

</tbody>

  </table>
   {{$lists ->links()}}
</div>
</div>

@endsection
