@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="{{route('admin.withdraw.view')}}" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input value="{{ $key }}" type="text"  name="search" class="form-control " placeholder="Search Member id">
                        <br>
                       <button type="submit" class="btn btn-info">Search</button>
                      </div>
                    </form>

    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Withdraw  Lists</i></h1>
<a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Withdraw
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
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
          <th scope="col">Phone</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
           <th scope="col">Status</th>
           <th>Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($lists  as  $key=>$loan)
    <tr>

  <td>{{$key+1}}</td>
           <td>{{$loan->member_id}}</td>
          <td>{{$loan->member_name}}</td>
           <td>{{$loan->account_no}}</td>
           <td>{{$loan->branch}}</td>
           <td>{{$loan->method}}</td>
             <td>{{$loan->phone}}</td>
           <td>{{$loan->amount}}</td>
           <td>{{$loan->date}}</td>
        <td>{{$loan->status}}</td>
@if($loan->status =='processing')
 <a button class="btn btn-primary btn-xs" href="{{ route('admin.withdraw.edit',$loan->id) }}"><i class="fa fa-pencil"></i></a></button>
@else
       <td> <a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></a></button>
               <a onclick="return confirm('Are You Sure?')"button  class="btn btn-danger btn-xs" href=""><i class="fa fa-trash-o"></i></button></a></td>
@endif
    </tr>

     @endforeach

</tbody>

  </table>
</div>
</div>

@endsection
