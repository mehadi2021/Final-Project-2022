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
                         @foreach ($members as  $lists )
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
                               @endforeach

                      <div class="pull-left"> Loan Amount: {{$amount->loan_amount}}</div>

                      <div class="clearfix"></div>
                    </div>
                  </div>

                </section>
                  <!-- /invoice-body -->

            <section class="panel">

                  <header class="panel-heading wht-bg">
                    <form action="" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input type="number"  name="search" class="form-control " placeholder="Search Member">
                            <br>
                       <button type="submit" class="btn btn-info">Submit</button>

                      </div>

                    </form>
                    <h1 style="margin-left:435px;"><i class="fa fa-angle-right">Loan Information</i></h1>

 </header>
            </section>


       <div class="content-panel">
              <table class="table">
                <thead>
                    <tr>
                      <th style="width:60px" class="text-center">No</th>
                      <th class="text-left">Member ID</th>
                      <th class="text-left">DESCRIPTION</th>
                          <th class="text-left">Payment Date</th>
                      <th style="width:140px" class="text-right">Amount</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
   @foreach ($loans as $key=>$mes )
                      <td class="text-center">{{ $key+1 }}</td>
                      <td>{{$mes->member_id}}</td>
                       <td>Loan Request</td>
                       <td>{{$mes->payment_date}}</td>

                      <td class="text-right">${{$mes->loan_amount}}</td>
                      <td class="text-right">${{$mes->loan_amount}}</td>

                    </tr>
                       @endforeach

                    </tr>
                  </tbody>
                </table>
            </div>


  <section class="panel">
    <div class="panel-body" >
        <div style="margin:43px; text-align:center;">

             <a href="#" class="btn btn-theme" onclick="printDiv('printableArea')">Print Now</a>
              <a class="btn btn-theme" href="{{route('admin.loan.list')}}"> Return Back</a>
        </div> </div>
     </section>
    </div>



                </div>
              </div>

    </section>
      @endsection
