@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
                 <h1 style="text-align:center;"><i class="fa fa-angle-right">Report Information</i></h1>
              <header class="panel-heading wht-bg">
              <div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('admin.report')}}" method="get">
            @csrf
            <label for="inputPassword4">From date</label>
            <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">To date</label>
            <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>

      </div>
       </header>
            </section>
              @if($key[1] && $key[1] !=null)
    <div class="alert alert-info" style="text-align:center;">
            <h4>Your Report is:&nbsp {{ $key[1] }} to {{ $key[2] }} &nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $reports ->count() }}</h4>
    </div>
     @endif
      <br>
   <div class="content-panel">
          <div class="card" id="printableArea">
                   <h1 style="text-align:center;">Report Information</h1>

      <br>
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
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>

        </tr>
      </thead>

      <tbody>
          @if($reports!= null)

         @foreach($reports as $key=>$report)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
         <td>{{$key+1}}</td>
           <td>{{$report->member_id}}</td>
          <td>{{$report->member_name}}</td>
           <td>{{$report->account_no}}</td>
            <td>{{$report->type}}</td>
           <td>{{$report->branch}}</td>
           <td>{{$report->method}}</td>
           <td>{{$report->amount}}</td>
           <td>{{$report->date}}</td>
             <td>{{ $report->created_at }}</td>
            <td>{{ $report->updated_at }}</td>
@endforeach
          @else
          <tr>
              <p>No data found</p>
            @endif
          </tr>
      </tbody>

    </table>
      </div>
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



