@extends('admin.master')
@section('content')

<div class="col-sm-12">

            <section class="panel">

  <h1  style="text-align:center;"><i class="fa fa-angle-right">Information Details</i></h1>
            </section>

<section class="panel">
    <div class="panel-body" >
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
                   @foreach($members as  $lists )
                  <h1>{{$lists->name}}</h1>
                </div>
                <!-- /pull-left -->
                <div class="pull-right">
             <div class="icn-main-container" style="text-align:right;" >
                   <img src="{{url('/uploads/'.$lists->image)}}" class="img-circle" width="150" height="120" alt="member image">
             </div>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-9">
                  <strong>Member ID:{{$lists->member_id}}</strong><br>
                  NID Number:{{$lists->voter_id}}<br>
                 <p>Account Number:{{$lists->account_no}}</p><br>
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left">Loan Payment: </div>
                      <div class="pull-right"> {{$amount}}</div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                      @endforeach
                </section>
                  <!-- /invoice-body -->

            <section class="panel">

                  <header class="panel-heading wht-bg">
                    <form action="" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input type="number"  name="search" class="form-control " placeholder="Search Member">
                        <br>
                              {{-- <button type="submit"><i class="fa fa-search"></i></button> --}}
                       <button type="submit" class="btn btn-info">Submit</button>

                      </div>

                    </form>

                    <h1 style="margin-left:350px;"><i class="fa fa-angle-right"> Loan Payment Information</i></h1>

 </header>
            </section>
       <div class="content-panel" id="printableArea">
              <table class="table">
                <thead>
                    <tr>
                      <th style="width:60px" class="text-center">No</th>
                      <th class="text-left">Member ID</th>
                      <th class="text-left">DESCRIPTION</th>
                       <th class="text-left">Transaction</th>
                      <th style="width:140px" class="text-right">Amount</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($loans as $key=>$mes )
                    <tr>

                      <td class="text-center">{{ $key+1 }}</td>
                      <td>{{$mes->member_id}}</td>
                      <td>{{$mes->type}}</td>
                        <td>{{ $mes->transaction }}</td>
                      <td class="text-right">${{$mes->amount}}</td>
                       <td class="text-right">{{$mes->amount}}</td>

                    </tr>
                       @endforeach


                    <tr>

                      <td colspan="4" rowspan="4">

                             <td class="text-right no-border">

                        <div class="well well-small green"><strong>Total</strong></div>

                           <td class="text-right"><strong>${{$amount}}</strong></td>
                      </td>

                    </tr>

                    </tr>
                  </tbody>
                </table></div>

  <section class="panel">
    <div class="panel-body" >
        <div style="margin:43px; text-align:center;">
             <a href="#" class="btn btn-theme" onclick="printDiv('printableArea')">Print Now</a>
              <a class="btn btn-theme" href="{{route('admin.loanlist')}}"> Return Back</a>
        </div> </div>
     </section>
    </div>

     <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
      @endsection
