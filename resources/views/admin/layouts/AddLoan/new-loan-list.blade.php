@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Member">
                        <br>
                       <button a href="" class="btn btn-info "> serach</button></a>
                      </div>
                    </form>

                    <h1  style="text-align:center;"><i class="fa fa-angle-right">New Loan Details</i></h1>

<a href="{{ route('admin.new.create') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Loan
</a>
   </header>
            </section>
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


 <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
          <th scope="col">#</th>
        <th scope="col">Loan Name</th>
        <th scope="col">Amount</th>
         <th scope="col">Time</th>
        <th scope="col">Rate</th>
        <th scope="col">Interest</th>
        <th scope="col">EMI</th>
        <th  scope="col">Action</th>
      </tr>
    </thead>
<tbody>
   @foreach($lists  as  $key=>$news)
    <tr>
     <td>{{ $key+1 }}</td>
    <td>{{ $news->name }}</td>
     <td>{{ $news->amount }}</td>
      <td>{{ $news->time }}</td>
       <td>{{ $news->rate }}</td>
        <td>{{ $news->interest }}</td>
         <td>{{ $news->emi }}</td>
        <td>
           <a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></button></a>
        <a button class="btn btn-primary btn-xs" href=""><i class="fa fa-pencil"></i></a>
       <a button onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-xs" href="" ><i class="fa fa-trash-o"></i></button></a>
     </td>

    </tr>
        @endforeach



</tbody>
  </table>
</div>

@endsection
