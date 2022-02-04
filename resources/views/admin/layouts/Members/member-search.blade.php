@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
    <h1  style="text-align:center;"><i class="fa fa-angle-right">Member  Search List</i></h1>
            </section>
            @if($key)
            <h4>You are searching for:{{ $key }}||found:{{ $list->count() }}</h4>
     @endif
<div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
          <th scope="col">#</th>
        <th scope="col">Member ID</th>
        <th scope="col">Account no</th>
         <th scope="col">phn_no</th>
        <th scope="col">Branch Name</th>
        <th style="text-align:center;" scope="col">Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($list  as  $key=>$news)
    <tr>

    <td>{{ $key+1 }}</td>
    <td>{{ $news->member_id}}</td>
    <td>{{ $news->account_no}}</td>
    <td>{{ $news->phon_no}}</td>
    <td>{{ $news->branch}}</td>

    <td style="text-align:center;"> <a class="btn btn-info" href="{{route('admin.members.details',$news->id)}}" role="button">details</a>
        <a class="btn btn-primary" href="{{ route('admin.members.edit',$news->id) }}" role="button">edit</a>
        <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="{{ route('admin.members.delete',$news->id)}}" role="button">delete</a></td>

    </tr>

     @endforeach

</tbody>
  </table>
</div>

@endsection
