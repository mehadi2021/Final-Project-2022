


  <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
        <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col"> Type</th>
        <th scope="col">Loan Amount</th>
        <th scope="col">Rate</th>
        <th scope="col">Time</th>
        <th scope="col">Interest</th>
         <th scope="col">EMI</th>
        <th scope="col">Payment Date</th>
         <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($lists as $key=>$list)
        <tr>
              <td>{{$key+1}}</td>
          <td>{{$list->member_id}}</td>
           <td>{{$list->member_name}}</td>
           <td>{{$list->ac_no}}</td>
              <td>{{$list->type}}</td>
           <td>{{$list->loan_amount}}</td>
           <td>{{$list->rate}}</td>
           <td>{{$list->time}}</td>
           <td>{{$list->interest}}</td>
           <td>{{$list->emi}}</td>
           <td>{{$list->payment_date}}</td>
         <td>{{$list->status}}</td>
            <td>

              </div>

             <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href="{{ route('home.addcart',$list->id) }}"><i class="fa fa-trash-o"></i>Add to cart</button></a>        </td>



        </tr>
        @endforeach


  </table>
  </div>
