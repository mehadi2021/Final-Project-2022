@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
                      <header class="panel-heading wht-bg">
                    <form action="" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input type="number"  name="search" class="form-control " placeholder="Search Member">
                        <br>
                       <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                    </form>
  <h1  style="text-align:center;"><i class="fa fa-angle-right"> Loan Status</i></h1>
<a href="{{ route('admin.loan.add') }}" class="btn btn-info ">Add New Loan</a>
<a href="{{ route('admin.payment') }}" class="btn btn-info " > Add New Payment</a>
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
            <h4>You are searching for:&nbsp {{ $key }}&nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $lists ->count() }}</h4>
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
        <th scope="col"> Type</th>
        <th scope="col">Loan Amount</th>
        <th scope="col">Rate</th>
        <th scope="col">Time</th>
        <th scope="col">Interest</th>
         <th scope="col">EMI</th>
        <th scope="col">Payment Date</th>
         <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($lists as $key=>$list)
        <tr>
              <td>{{$key+1}}</td>
          <td>{{$list->member_id}}</td>
           <td>{{$list->member_name}}</td>
           <td>{{$list->ac_no}}</td>
              <td>{{$list->type}}</td>
           <td>{{$list->loan_amount}}</td>
           <td>{{$list->rate}}</td>
           <td>{{$list->time}}</td>
           <td>{{$list->interest}}</td>
           <td>{{$list->emi}}</td>
           <td>{{$list->payment_date}}</td>
         <td>{{$list->status}}</td>
            <td>
@if($list->status =='In Process')
         <div class="btn-group">
                <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                  Check<span class="caret"></span>
                  </button>
                <ul class="dropdown-menu" style="min-width:95px;" role="menu">
                  <li><a href="{{ route('admin.loan.approve',$list->id) }}">Approve</a></li>
                   <li><a href="{{route('admin.loan.cancel',$list->id)}}">Cancel</a></li>
                </ul>
              </div>

             @else
              <a button class="btn btn-success btn-xs" href="{{ route('admin.loan.request.details',$list->member_id) }}"><i class=" fa fa-check"></i></a></button>
             <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href="{{ route('admin.loan.delete',$list->id) }}"><i class="fa fa-trash-o"></i></button></a>        </td>
        @endif



        </tr>
        @endforeach


  </table>
    {{$lists ->links()}}
  </div>
    @endsection
