@extends ('admin.master')
@section('content')
<div class="col-sm-12">
 <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Add New Branch</i></h1>
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


@if(session('success'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('success')  !!}
    </div>
@endif

 @if(session('error'))
    <div class="alert alert-danger" style="text-align:center;">
           {!! session('error') !!}
    </div>
@endif

 <section class="panel">
      <div class="panel-body">


<form action="{{ route('admin.branch.store') }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Add Branch</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="name" class="form-control" required placeholder=" Enter Your new branch name" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>
 </section>
</div>
    @endsection
