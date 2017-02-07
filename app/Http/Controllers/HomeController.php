<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Incoming;
use App\Outgoing;
use App\Disposition;
use App\Users;
use DB;

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

    public function formatGraph($yearmonth)
    {
        $oldDate = $yearmonth;
        $arr = explode('-', $oldDate);
        $newDate = $arr[1].'/'.$arr[0];

        return $newDate;
    }

    public function countGraph($flow="incoming", $type=null)
    {
        if(empty($type)) {
            $typeClause = "";
        } else {
            $typeClause = "type = '".$type."' AND ";
        }
        $month8 = date('Y-m', strtotime('-8 month'));
        $month7 = date('Y-m', strtotime('-7 month'));
        $month6 = date('Y-m', strtotime('-6 month'));
        $month5 = date('Y-m', strtotime('-5 month'));
        $month4 = date('Y-m', strtotime('-4 month'));
        $month3 = date('Y-m', strtotime('-3 month'));
        $month2 = date('Y-m', strtotime('-2 month'));
        $month1 = date('Y-m', strtotime('-1 month'));
        $month0 = date("Y-m");  

        $query = "
        SELECT DISTINCT
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause." `input_date` BETWEEN '".$month8."-01' AND '".$month8."-31') as '".$this->formatGraph($month8)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month7."-01' AND '".$month7."-31') as '".$this->formatGraph($month7)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month6."-01' AND '".$month6."-31') as '".$this->formatGraph($month6)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month5."-01' AND '".$month5."-31') as '".$this->formatGraph($month5)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month4."-01' AND '".$month4."-31') as '".$this->formatGraph($month4)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month3."-01' AND '".$month3."-31') as '".$this->formatGraph($month3)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month2."-01' AND '".$month2."-31') as '".$this->formatGraph($month2)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month1."-01' AND '".$month1."-31') as '".$this->formatGraph($month1)."',
        ( SELECT COUNT(id) FROM `".$flow."` WHERE ".$typeClause."`input_date` BETWEEN '".$month0."-01' AND '".$month0."-31') as '".$this->formatGraph($month0)."'
        FROM 
            `".$flow."`
        ";
        $result = DB::select($query);
        return $result;

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
        $countIncomingInternal = Incoming::where('type', 'internal')
                            ->count();
        $countIncomingExternal = Incoming::where('type', 'external')
                            ->count();
        $countOutgoingInternal = Outgoing::where('type', 'internal')
                            ->count();
        $countOutgoingExternal = Outgoing::where('type', 'external')
                            ->count();
        $incomingGraphData = $this->countGraph("incoming",null);
        $outgoingGraphData = $this->countGraph("outgoing",null);
        return view('tnde.dashboard', [
            'user'             => $user,
            'totalIncoming'    => $totalIncoming,
            'totalOutgoing'    => $totalOutgoing,
            'totalDisposition' => $totalDisposition,
            'totalUsers'       => $totalUsers,
            'incomingInternal' => $incomingInternal,
            'incomingExternal' => $incomingExternal,
            'outgoingInternal' => $outgoingInternal,
            'outgoingExternal' => $outgoingExternal,
            'countIncomingInternal' => $countIncomingInternal,
            'countIncomingExternal' => $countIncomingExternal,
            'countOutgoingInternal' => $countOutgoingInternal,
            'countOutgoingExternal' => $countOutgoingExternal,
            'incomingGraphData' => $incomingGraphData,
            'outgoingGraphData' => $outgoingGraphData
        ]);
    }

    

    public function showCount()
    {
        return HomeController::countGraph("incoming",null);
    }
}
