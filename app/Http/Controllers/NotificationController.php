<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use App\Notifications\OffersNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       public function index()
       {

       }
          public function sendNotification()
          {
              $offerData=[

'name'=>'mehadi',
'bpdy'=>'recived.',
'thanks'=>'Thank You',
'offertext'=>'checkout',
'offerurl'=>url('/')

              ];
              Notification::send($userSchema,new OffersNotification($offerData));
              dd('hddbh');
          }
}
