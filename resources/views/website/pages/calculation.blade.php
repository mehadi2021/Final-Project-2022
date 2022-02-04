@extends('website.pages.service')
@section('mehadi')
              <article  style="margin-left:30px;">
                <img src="assets/images/single_service_01.jpg" alt="">
                 <h4  style="text-align:center;">calculation</h4>
                 <br>

               <form action="" class="form-horizontal form-label-left"  method="post">
 @csrf


     <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="number" name="m"  class="form-control"  required placeholder=" Enter your Member ID" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="mh"  class="form-control"  required placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
      <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Account Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="mhr" class="form-control" required placeholder=" Enter Your Account Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>
  </article>
          </div>
        </div>
      </div>
    </div>

@endsection
