@extends('admin.master')
@section('content')
 <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Administrator Information</i></h1>
 </section>

@if(session('success'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('success')  !!}
    </div>
@endif
 <section class="panel">
        <div class="panel-body">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>{{auth()->user()->email}}</h4>
                  <h5>Gmails</h5>
                  <h4>{{auth()->user()->mobile}}</h4>
                  <h5>Mobile</h5>
                  <h4>$ 13,980</h4>
                  <h5>MONTHLY EARNINGS</h5>
                </div>
              </div>
              <!-- /col-md-4 -->

              <div class="col-md-4 profile-text">
                <h3>{{ucwords(auth()->user()->name)}}</h3>
                <h5>Main Administrator</h5>
                <p>I am {{ucwords(auth()->user()->name)}}.My home district Sherpur.I was complete my Bsc IUBAT university.</p>
                <br>
                <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="{{url('/uploads/'.auth()->user()->image)}}"class="img-circle"></p>
                  <br>
                    <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                      <a href="{{route ('admin.registration') }}" class="btn btn-theme02" >Registration</a>
                    <a href="{{route ('admin.profile.edit',auth()->User()->id) }}" class="btn btn-theme02" >Profile Edit </a>
                  </p>
                </div>
        </section>
    </div>
@endsection
