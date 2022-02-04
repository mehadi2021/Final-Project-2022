@extends('website.user')
@section('content')

<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Services</h1>
            <span>We are over 20 years of experience</span>
          </div>
        </div>
      </div>
    </div>
        <div class="row">
          <div class="col-md-3" style="margin-top:150px;">
            <ul >
               <li style="background: #a4c639;margin:10px;padding:15px;"><a href="{{ route('user.payment') }}">Payment <i class="fa fa-angle-right"></i></a></li>
              <li style="background: #a4c639;margin:10px;padding:15px;"><a href="{{ route('user.loan') }}">Loan Request <i class="fa fa-angle-right"></i></a></li>
              <li style="background: #a4c639;margin:10px;padding:15px;"><a href="{{ route('user.profile',auth()->user()->id )}}">Profile <i class="fa fa-angle-right"></i></a></li>
              <li style="background: #a4c639;margin:10px;padding:15px;" ><a href="{{ route('user.report',auth()->user()->member_id ) }}">Report <i class="fa fa-angle-right"></i></a></li>
            <li style="background: #a4c639;margin:10px;padding:15px;" ><a href="{{ route('user.withdraw') }}">Withdraw <i class="fa fa-angle-right"></i></a></li>

            </ul>
          </div>
          <div class="col-md-9" style="margin-top:20px;">
         @yield('mehadi')
          </div>

      </div>
    </div>


@endsection
