@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
  <h1  style="text-align:center;"><i class="fa fa-angle-right">Wellcome to our admin panel</i></h1>
            </section>
@if(session('success'))
    <div class="alert alert-success" style="text-align:center;">
      <h4>  {!!  session ('success')  !!}
        @if (auth()->user()){{ucwords(auth()->user()->name)}}<h4>
            @endif
    </div>
@endif

 <section class="panel">
<div class="panel-body" style="margin-left:10px;">
          <div class="col-lg-14">


					<div class="col-md-3 widget states-mdl" style=" background-color: #263544; color:white;  padding-top:10px; text-align:center; margin:40px;">
		                       <div class="count-area-content">
                  <div class="count-digit">{{$member}}</div>
                  	<div class="stats-left ">
							<h5>Total</h5>
							<h4>Member</h4>
						</div>
                        </div>
                </div>
					<div class="col-md-3 widget states-mdl"  style=" background-color: #263544; color:white; padding-top:10px;   text-align:center; margin:40px;">
                                    <div class="count-digit">  {{$total}}</div>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Amount</h4>
						</div>
						</div>

					</div>
					<div class="col-md-3 widget states-last"  style=" background-color: #263544; color:white; padding-top:10px;  text-align:center;  margin:40px;">
			 <div class="count-digit">{{$loans}}</div>
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Loan Request</h4>
						</div>

					</div>


	<div class="col-md-3 widget states-mdl"  style=" background-color: #263544; color:white; padding-top:10px;   text-align:center; margin:40px;">
                                             {{$user}}
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Users</h4>
						</div>
						</div>


                    	<div class="col-md-3 widget states-mdl"  style=" background-color: #263544; color:white; padding-top:10px;   text-align:center; margin:40px;">
                                             {{$deposit}}
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Deposit Amount:   {{$adeposit}}</h4>
						</div>
						</div>


 	<div class="col-md-3 widget states-mdl"  style=" background-color: #263544; color:white; padding-top:10px;   text-align:center; margin:40px;">
                                                {{$aloans}}
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Loan Amount:{{$aloan}}</h4>
						</div>
						</div>

                          </div>


                          </div></div>
					@endsection
