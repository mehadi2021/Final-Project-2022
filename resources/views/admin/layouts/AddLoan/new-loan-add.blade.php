@extends ('admin.master')
@section('content')


<div class="col-sm-12">
 <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Add New Member</i></h1>
 </section>


                    @if($errors->any())
    <div class="alert alert-danger" style="text-align:center;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


@if(session('success'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('success')  !!}
    </div>
@endif

 @if(session('error'))
    <div class="alert alert-danger" style="text-align:center;">
           { !! session('error') !! }
    </div>
@endif


 <section class="panel">

                <div class="panel-body">

<form action="{{ route('admin.new.store') }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="name" class="form-control" required placeholder=" Enter Your member id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="number" name="amount"  class="form-control"  required placeholder=" Enter your Date Of Birth" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
      <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Time</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="number" name="time"  class="form-control"  required placeholder=" Enter your Date Of Birth" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Rate</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="number"  name="rate" class="form-control" required  placeholder=" Enter Your Account Address" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="interest" class="form-control"  required placeholder=" Enter Your Voter Id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">EMI</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="emi"  class="form-control" required placeholder=" Enter Your Phone Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>





    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>

@endsection
