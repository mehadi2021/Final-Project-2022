@extends ('admin.master')
@section('content')
<section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right">Admin Registration</i></h1>
 </section>

   <section class="panel">
                <div class="panel-body">



 <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

 <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Name:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="username" class="form-control" required placeholder=" Enter Your Name" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Email:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="email"  class="form-control"  required placeholder=" Enter your Email Address" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Password:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="password" class="form-control" required  placeholder=" Enter Your Password" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Mobile:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="mobile" class="form-control"  required placeholder=" Enter Your Mobile Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


<div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Your Role</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="role" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                      </select>
                       </div>
    </div>
<div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Upload Image</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="file" name="image"  class="form-control"  required data-inputmask="'mask': '99/99/9999'">
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
