@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
                 <h1 style="text-align:center;"><i class="fa fa-angle-right">Report Information</i></h1>
              <header class="panel-heading wht-bg">
              <div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('admin.withdraw.report')}}" method="get">
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
            <h4>Your Report is:&nbsp {{ $key[1] }} to {{ $key[2] }} &nbsp &nbsp||&nbsp &nbspfound:&nbsp{{ $lists ->count() }}</h4>
    </div>
     @endif
      <br>
   <div class="content-panel">
          <div class="card" id="printableArea">
                   <h1 style="text-align:center;">Withdraw Report Information</h1>

      <br>
      <table class="table">
      <thead>
        <tr>    <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
          <th scope="col">Phone</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
           <th scope="col">Status</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>

        </tr>
      </thead>

      <tbody>
          @if($lists!= null)

         @foreach($lists  as  $key=>$loan)
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
             <td>{{ $loan->created_at }}</td>
            <td>{{ $loan->updated_at }}</td>
    </tr>

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



