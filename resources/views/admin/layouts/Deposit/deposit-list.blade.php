@extends('admin.master')
@section('content')




<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="{{ route('admin.deposit.list') }}" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input value="{{ $key }}" type="number"  name="search" class="form-control " placeholder="Search Member id">

                        <br>
                       <button a href="" class="btn btn-info "> serach</button></a>
                      </div>
                    </form>

    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Deposit List</i></h1>

<a href="{{ route('admin.payment') }}" class="btn btn-info " > Add New Deposit</a>
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
            <h4>You are searching for:&nbsp {{ $key }}&nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $deposits ->count() }}</h4>
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
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
@foreach($deposits as $key=>$deposit)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
         <td>{{$key+1}}</td>
           <td>{{$deposit->member_id}}</td>
          <td>{{$deposit->member_name}}</td>
           <td>{{$deposit->account_no}}</td>
            <td>{{$deposit->type}}</td>
           <td>{{$deposit->branch}}</td>
           <td>{{$deposit->method}}</td>
           <td>{{$deposit->amount}}</td>
           <td>{{$deposit->date}}</td>





            <td><a button class="btn btn-success btn-xs" href="{{ route('admin.deposit.details',$deposit->member_id) }}"><i class=" fa fa-check"></i></button></a>
                 <a button class="btn btn-primary btn-xs" href=""><i class="fa fa-pencil"></i></button></a>
                <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href=""><i class="fa fa-trash-o"></i></button></a>
            </td>

        </tr>
        @endforeach
</table>
{{$deposits ->links()}}
</div>
    @endsection
