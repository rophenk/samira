<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Incoming;
use App\Outgoing;
use App\Disposition;
use App\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user             = $request->user();
        $totalIncoming    = Incoming::count();
        $totalOutgoing    = Outgoing::count();
        $totalDisposition = Disposition::count();
        $totalUsers       = Users::count();
        $incomingInternal = Incoming::where('type', 'internal')
                            ->orderBy('letter_date', 'desc')
                            ->take(5)
                            ->get();
        $incomingExternal = Incoming::where('type', 'external')
                            ->orderBy('letter_date', 'desc')
                            ->take(5)
                            ->get();
        $outgoingInternal = Outgoing::where('type', 'internal')
                            ->orderBy('letter_date', 'desc')
                            ->take(5)
                            ->get();
        $outgoingExternal = Outgoing::where('type', 'external')
                            ->orderBy('letter_date', 'desc')
                            ->take(5)
                            ->get();

        return view('tnde.dashboard', [
            'user'             => $user,
            'totalIncoming'    => $totalIncoming,
            'totalOutgoing'    => $totalOutgoing,
            'totalDisposition' => $totalDisposition,
            'totalUsers'       => $totalUsers,
            'incomingInternal' => $incomingInternal,
            'incomingExternal' => $incomingExternal,
            'outgoingInternal' => $outgoingInternal,
            'outgoingExternal' => $outgoingExternal
        ]);
    }
}
