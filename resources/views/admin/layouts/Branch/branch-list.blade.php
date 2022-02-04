@extends ('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input type="number"  name="search" class="form-control " placeholder="Search Member">
                        <br>
                       <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                    </form>

    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Branch  Details</i></h1>
<a href="{{route('admin.branch.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Branch
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
        <th scope="col">Branch Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
<tbody>
  @foreach($branches as  $key=>$branch)
    <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $branch->name }}</td>

    <td> <a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></button></a>
        <a button class="btn btn-primary btn-xs" href=""><i class="fa fa-pencil"></i></button></a>
        <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"  href=""><i class="fa fa-trash-o"></i></button></a></td>

    </tr>
@endforeach

</tbody>
  </table>
</div>

@endsection

