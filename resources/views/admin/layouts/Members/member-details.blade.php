@extends('admin.master')
@section('content')
<div  id="printableArea">
<div class="col-sm-12">
            <section class="panel">
  <h1  style="text-align:center;"><i class="fa fa-angle-right">Information Details</i></h1>
            </section>



<section class="panel">
      <div class="panel-body" >
     <div class="col-lg-10 col-lg-offset-1">
           <div class="invoice-body">
                <div class="pull-left">
                        {{-- @foreach($user as  $list ) --}}
                  <h1>{{$member->name}}</h1>
                   <address>
                {{-- <strong>{{$user->email}}</strong><br>
                   Bangladesh,2011<br>
                <abbr title="Phone">Phone</abbr> {{$user->mobile}} --}}
              </address>
                  {{-- @endforeach --}}
                </div>
                  <!-- /pull-left -->
                <div class="pull-right">
             <div class="icn-main-container" style="text-align:right;" >
               {{-- @foreach ($member as  $lists ) --}}

               <div class="well well-small black">
                   <img src="{{url('/uploads/'.$member->image)}}" class="img-square" width="155" height="125" alt="member image">
             </div>
             </div>
                </div>
                <!-- /pull-right -->
                  <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-9">
                  <strong>Member ID:{{$member->member_id}}</strong><br>
                  NID Number:{{$member->voter_id}}<br>
                 <p>Account Number:{{$member->account_no}}</p><br>
                </address>

                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-3">
                    <br>
                    <div>
                      <div class="pull-left"> Joining Date : </div>
                      <div class="pull-right"> {{$member->created_at}} </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> Last Update date: </div>
                      <div class="pull-right"> {{$member->updated_at}} </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right"> 8,000 USD </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  </div> </div>

{{-- @endforeach --}}
           </div>
          </div>
             </div>
        </section>
             <section class="panel">
    <div class="panel-body" >
        <div style="margin:43px; text-align:center;">

             <a href="#" class="btn btn-theme" onclick="printDiv('printableArea')">Print Now</a>
              <a class="btn btn-theme" href="{{route('admin.members.list'); }}"> Return Back</a>



            </div>

        </div></section>
    </div>








 <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

  @endsection




