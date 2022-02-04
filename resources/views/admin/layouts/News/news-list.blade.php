@extends('admin.master')
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

    <h1  style="text-align:center;"><i class="fa fa-angle-right">News Details</i></h1>
<a href="{{route ('admin.news.add') }}" class="btn btn-info "> Add News</a>

</header>
            </section>

      <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
           <th>#</th>
        <th>News</th>
         <th>Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($list  as  $key=>$news)
    <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $news->news_description }}</td>

    <td>
        <a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></button></a>
        <a button class="btn btn-primary btn-xs" href=""><i class="fa fa-pencil"></i></a>
       <a button onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-xs" href="{{ route('admin.news.delete',$news->id) }}" ><i class="fa fa-trash-o"></i></button></a>
    </td>
</tr>
     @endforeach

</tbody>
  </table>
  {{$list ->links()}}
            </div>
            </div>
@endsection
