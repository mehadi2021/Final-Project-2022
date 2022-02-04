@extends('website.pages.service')
@section('mehadi')
@if(session('reporterror'))
    <div class="alert alert-danger" style="text-align:center;">
           {!! session('reporterror') !!}
    </div>
@endif
  <article  style="margin-left:30px;">
    <h4  style="text-align:center;">Member profile</h4>
                 <br>

              <div class="custom-box"  style="margin-left:450px;" >


                <div class="icn-main-container" >
                    @foreach($members as $member)

          <img src="{{url('/uploads/'.$member->image)}}" class="img-square" width="155" height="125" alt="member image">
              </div>
                <br>
                <br>
                <ul class="pricing">
                  <li>User Name:{{$member->name}}</li>
                  <li>Member ID:{{$member->member_id}}</li>
                   <li>Voter ID:{{$member->voter_id}}</li>
                    <li>Mobile:{{$member->phon_no}}</li>

                </ul>
                @endforeach
              </div></article>
              <br>
              <h3 style="text-align:center;">Loan Status</h3>
              <br>
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
</tr>
        @endforeach


  </table>
  <br>
        <h3 style="text-align:center;">Deposit  Payment Status</h3>
<br>
          <table class="table">
                <thead>
                  <tr>
        <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
            <th scope="col">Transaction</th>


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
           <td>{{$deposit->branch}}</td>
           <td>{{$deposit->method}}</td>
           <td>{{$deposit->amount}}</td>
           <td>{{$deposit->date}}</td>
           <td>{{$deposit->transaction}}</td>
        </tr>
        @endforeach
</table>
{{$deposits ->links()}}






  <br>
        <h3 style="text-align:center;">Loan Payment Status</h3>
<br>
          <table class="table">
                <thead>
                  <tr>
        <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
            <th scope="col">Transaction</th>


      </tr>
    </thead>
    <tbody>
@foreach($loans as $key=>$loan)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
         <td>{{$key+1}}</td>
           <td>{{$loan->member_id}}</td>
          <td>{{$loan->member_name}}</td>
           <td>{{$loan->account_no}}</td>
           <td>{{$loan->branch}}</td>
           <td>{{$loan->method}}</td>
           <td>{{$loan->amount}}</td>
           <td>{{$loan->date}}</td>
           <td>{{$loan->transaction}}</td>
        </tr>
        @endforeach
</table>
{{$loans->links()}}
  </div>




<br>
        <h3 style="text-align:center;">Withdraw Status</h3>
<br>
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
             <th scope="col">Transaction</th>

      </tr>
    </thead>
    <tbody>
 @foreach($withdraw  as  $key=>$loan)
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
        <td>{{$loan->transaction}}</td>
     @endforeach
</table>
{{$withdraw->links()}}
  </div>









@endsection
