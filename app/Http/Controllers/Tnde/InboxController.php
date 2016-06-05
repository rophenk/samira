<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\IncomingActivities;
use App\AttachmentIncoming;
use DB;

class InboxController extends Controller
{
    public function index(Request $request)
    {
        $user       = $request->user();

        // Tampilkan semua data Surat Masuk Milik User Tersebut
        $incomingActivities = IncomingActivities::where('userID', '=', $user->id)
                              ->orderBy('dateSend', 'desc')
                              ->simplePaginate(10);

        
        return view('tnde.inbox-incoming', ['user' => $user, 'incoming' => $incomingActivities]);
    }

    /*public function listIncoming(Request $request)
    {
      $user       = $request->user();
      $incomingActivities = IncomingActivities::where('userID', '=', $user->id)->simplePaginate(10);
      var_dump($incomingActivities);die();
      $incomingActivities->setPath('/list-inbox');
        return view('tnde.inbox-incoming-list', ['user' => $user, 'incoming' => $incomingActivities]);
    }*/

    public function viewIncoming(Request $request)
    {
      $user       = $request->user();
      $incomingID = $request->incomingId;
      $incomingActivities = IncomingActivities::where('id', '=', $incomingID)->first();
      $attachment = AttachmentIncoming::where('incoming_id', '=', $incomingActivities->incoming->id)->get();

      IncomingActivities::where('id', '=', $incomingID)
                          ->update([
                              'read' => 1
                              ]);

      return view('tnde.inbox-incoming-view', ['user' => $user, 'incoming' => $incomingActivities, 'attachment' => $attachment]);
    }
}
