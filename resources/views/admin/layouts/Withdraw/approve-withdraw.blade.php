@extends ('admin.master')
@section('content')
<div class="col-sm-12">
            <section class="panel">
  <h1  style="text-align:center;"><i class="fa fa-angle-right">Update User Information</i></h1>
            </section>
     <section class="content-panel">

                <div class="panel-body">
                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div style="margin-top: 10px;">

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




<form action="{{ route('admin.withdraw.approve',$list->id) }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf
 @method('put')

  <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Transaction No</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="transaction" class="form-control" required placeholder=" Enter Your member id"  value=""data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Status</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="status" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="approve">Approve</option>
                        <option value="reject">Reject</option>
                      </select>
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
