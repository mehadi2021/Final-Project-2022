@extends('admin.master')
@section('content')

<div class="col-sm-12">
 <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Add News</i></h1>
 </section>

 <section class="panel">

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



           <form action="{{ route('admin.news.store') }}" class="form-horizontal form-label-left"  method="post">
 @csrf

 <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter News Title</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="title" class="form-control" placeholder=" Enter news title" data-inputmask="'mask': '99/99/9999'"></input>
                </div>
    </div>




     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Update News</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <textarea type="description"  name="news_description" class="form-control" placeholder=" Enter news here" data-inputmask="'mask': '99/99/9999'"></textarea>
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
                  </>
                </div>
            </div>
@endsection
