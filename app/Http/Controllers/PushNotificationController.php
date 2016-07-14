<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PushNotification;  
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PushNotificationController extends Controller
{
    //
    public function sendNotificationToDevice(){
      //$deviceToken = 'DEV-211176bb-b6d5-4f1f-a080-899354c8bc90';
      //$deviceToken = 'ae1c2af5-f88d-41a7-b17a-f077766d13ba';
      //$deviceToken = '86e1e8c7-905d-47c8-9f26-4a7c38f4117b';
      $deviceToken = 'DEV-b627945d-5026-4353-8347-679fdbbb285d';

      $message = 'We have successfully sent a push notification!';

      PushNotification::app('appNameAndroid')  
                ->to($deviceToken)
                ->send($message);
         
    }
}
    
