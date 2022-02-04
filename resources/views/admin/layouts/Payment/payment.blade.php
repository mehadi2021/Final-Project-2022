@extends ('admin.master')
@section('content')

<div class="col-sm-12">
 <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Add Payment</i></h1>
 </section>


                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


@if(session('deposit'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('deposit')  !!}
    </div>
@endif

 @if(session('depositerror'))
    <div class="alert alert-danger" style="text-align:center;">
           {!! session('depositerror') !!}
    </div>
@endif


 <section class="panel">

                <div class="panel-body">

    <form action="{{ route('admin.payment.store') }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf


     <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="number" name="member_id"  class="form-control"  required placeholder=" Enter your Member ID" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="member_name"  class="form-control"  required placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
      <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Account Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="account_no" class="form-control" required placeholder=" Enter Your Account Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Type</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="type" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="deposit">Deposit</option>
                        <option value="loan">Loan</option>
                      </select>
                       </div>
    </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Branch Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">

                      <select class="form-control" name="branch" id=""   aria-label="Default select example" required>
  <option value="Null" >select from here</option>
                        @foreach($branches as $branch)

                       <option value="{{ $branch->name }}">{{ $branch->name }}</option>
@endforeach
                      </select>

                        </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Method</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="method" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="bkash">Bkash</option>
                        <option value="nogad">Nogad</option>
                        <option value="roket">Rocket</option>
                      </select>
                       </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="number"  name="amount" class="form-control"  required placeholder=" Enter Your Amount" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Date</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
             <input type="date"  name="date"  class="form-control" required placeholder=" Enter Today Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">eferance Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="transaction"  class="form-control"  required placeholder=" Enter Your Transation Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>
                </div>
























































                

@endsection
