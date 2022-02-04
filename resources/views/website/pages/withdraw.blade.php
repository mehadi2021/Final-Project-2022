@extends('website.pages.service')
@section('mehadi')

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

              <article  style="margin-left:30px;">
                <img src="assets/images/single_service_01.jpg" alt="">
                 <h4  style="text-align:center;">Withdraw</h4>
                 <br>

               <form action="{{ route('user.withdraw.store') }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
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

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="number"  name="phone" class="form-control"  required placeholder=" Enter Your Amount" data-inputmask="'mask': '99/99/9999'">
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
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
        {{-- <a button class="btn btn-info" href="{{route('payment.message',auth()->user()->member_id)}}">Info</a></button> --}}


         </div>
     </div>


</form>

  </article>
          </div>
        </div>
      </div>
    </div>

@endsection
