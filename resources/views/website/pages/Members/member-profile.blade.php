@extends('website.pages.service')
@section('mehadi')
  <article  style="margin-left:30px;">
    <h4  style="text-align:center;">Member profile</h4>
                 <br>

              <div class="custom-box"  style="margin-left:300px;" >


                <div class="icn-main-container" >

            <img src="{{url('/img/friends/me.jpg')}}" class="img-square" width="155" height="125" alt="member image">
                </div>
                <br>
                <br>
                <ul class="pricing" >
                  <li>User Name:{{$members->name}}</li>
                   <li style="background-color:rgb(0, 255, 55);margin-right:500px;">Account Status:{{$members->member_id}}</li>
                  <li>User Email:{{$members->email}}</li>
                    <li>Mobile:{{$members->mobile}}</li>
                                     <li style="background-color:rgb(0, 255, 55);margin-right:500px;">Current Balance:{{ $balance - $Cbalance }}</li>
                        <li style="background-color:rgb(0, 255, 55);margin-right:500px;">Deposit Payment Amount:{{$deposits}}</li>
                         <li style="background-color:red;margin-right:500px;">Loan Payment Amount:{{$loans}}</li>
                </ul>

                <a class="btn btn-theme" href="#">Print Now</a>
              </div></article>
              </div>
@endsection
