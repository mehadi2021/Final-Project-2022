@extends ('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
  <h1  style="text-align:center;"><i class="fa fa-angle-right">Edit Administrator Info</i></h1>
            </section>


   <section class="panel">
      <div class="panel-body">



<form action="{{ route('admin.profile.update',$lists->id) }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
    @csrf
@method('put')
   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="username" class="form-control" value="{{ old('name',$lists->name )}}" placeholder=" Enter Your user id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Email:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="email"  class="form-control" value="{{ old('email',$lists->email )}}" placeholder=" Enter your Member Id" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Password:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="password" class="form-control"   placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Mobile:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="mobile" class="form-control" value="{{ old('mobile',$lists->mobile )}}"  placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

<div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Your Role</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="role" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="admin"{{ $lists->role=='admin' ? 'selected': ' ' }}>admin</option>
                        <option value="user" {{ $lists->role=='user' ? 'selected': ' ' }}>user</option>
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
        <a href={{ route('admin.profile') }} class="btn btn-success">Cancel</a>
         </div>
     </div>

</form>
</div>


@endsection
