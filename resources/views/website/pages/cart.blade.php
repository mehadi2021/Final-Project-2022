


  <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
        <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
      </tr>
    </thead>
    <tbody>
@foreach($listss as $key=>$list)
        <tr>
              <td>{{$key}}</td>
          <td>{{$list['id']}}</td>
 <td>{{$list['member_id']}}</td>
             <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href=""><i class="fa fa-trash-o"></i>CheckOut</button></a>        </td>
             <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href=""><i class="fa fa-trash-o"></i>Clear Cart</button></a>        </td>



        </tr>
        @endforeach


  </table>
  </div>
