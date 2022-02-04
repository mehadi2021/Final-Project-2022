
<!--sidebar start-->

        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="{{url('/uploads/'.auth()->user()->image)}}" class="img-circle" width="90" height="90"></a></p>
                <h5 class="centered">{{ucwords(auth()->user()->name)}}</h5>
          <h6 style=" text-align: center; font-size:15px;" ><a href="{{ route('admin.profile') }}" style="color:rgb(218, 212, 212);" ><i class="fa fa-cog">Administrator</i></a></h6>
          <li class="mt">
            <a class="active" href="{{route('admin')}}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Members</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('admin.members.add')}}">Add NEw Member</a></li>
              <li><a href="{{route('admin.members.list')}}">Member List</a></li>
              <li><a href="">Member Details List</a></li>
              <li><a href="font_awesome.html">Transaction Posting</a></li>
               <li><a href="">Member Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('admin.branch.list') }}">Branch</a></li>
              <li><a href="{{ route('admin.loan.new') }}">Loan</a></li>
              <li><a href="{{ route('admin.user.list') }}">User List</a></li>
               <li><a href="{{ route('admin.report') }}">Report</a></li>
              {{-- <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>  --}}
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>News Pages</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('admin.news.add')}}">Create News</a></li>
              <li><a href="{{ route('admin.news.list')}}">News Details</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Loan</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('admin.loan.add')}}">Loan Request</a></li>
              <li><a href="{{route('admin.loan.list')}}">Loan Status</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Payment</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('admin.payment') }}">Add Money</a></li>
              <li><a href="{{route('admin.deposit.list')}}">Deposit Status</a></li>
              <li><a href="{{route('admin.loanlist')}}">Loan Status</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Withdrow</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('admin.withdraw.view') }}">Withdraw List</a></li>
              <li><a href="{{ route('admin.withdraw.report') }}">Withdraw Report</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
        <!-- sidebar menu end-->

    <!--sidebar end-->
