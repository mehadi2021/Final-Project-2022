@extends('website.pages.service')
@section('mehadi')

@if(session('deposit'))
    <div class="alert alert-success" style="text-align:center;">
        {!!  session ('deposit')  !!}
    </div>
@endif

 @if(session('depositerror'))
    <div class="alert alert-danger" style="text-align:center;">
           {!! session('depositerror') !!}
    </div>
@endif

                 <h4  style="text-align:center;">Payment information</h4>
                 <br>
                 <div style="text-align:center; font-size:30px; color:red;">
                 @foreach($message as $messages)

      <p style="text-align:center; font-size:30px;''>Member ID:{{$messages->member_id}}</p>
       <p style="text-align:center; font-size:30px;''>Member Account:</p>
       <p style="text-align:center; font-size:30px;''>Member Amount:</p>
          <p style="text-align:center; font-size:30px;''>Transaction ID:{{$messages->transaction}}</p>
          @endforeach
                 </div>
</div>
  </article>
          </div>
        </div>
      </div>
    </div>

@endsection
