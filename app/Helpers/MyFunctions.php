<?php

namespace App\Helpers;

use App\IncomingActivities;
use App\Disposition;
use DB;

class MyFunctions {

    public static function full_name($first_name,$last_name) {
        return $first_name . ', '. $last_name;   
    }

    public static function calendar_time($value) {
    $dateonly = explode(" ",$value);
    $explode_date = explode("-",$dateonly[0]);
    $new_date = $explode_date[2]."-".$explode_date[1]."-".$explode_date[0]." ".$dateonly[1];
    
    return $new_date;
    }
  
  public static function tanggalIndo($date){
    $explode_date = explode("-",$date);
    $bln = $explode_date[1];
    switch ($bln){
      case "01":$bulan = "Januari";break;     
      case "02":$bulan = "Februari";break;      
      case "03":$bulan = "Maret";break;
      case "04":$bulan = "April";break;     
      case "05":$bulan = "Mei";break;     
      case "06":$bulan = "Juni";break;
      case "07":$bulan = "Juli";break;      
      case "08":$bulan = "Agustus";break;     
      case "09":$bulan = "September";break;
      case "10":$bulan = "Oktober";break;     
      case "11":$bulan = "November";break;      
      case "12":$bulan = "Desember";break;
            
    }
    $tanggal = $explode_date[2]." ".$bulan." ".$explode_date[0];
    return $tanggal;
  }

    public static function renderNode($node) {
      if( $node->isLeaf() ) {
        return '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name . '</div>
                </li>';
      } else {
        $html = '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name. '</div>';

        $html .= '<ol class="dd-list">';

        foreach($node->children as $child)
          $html .= MyFunctions::renderNode($child);

        $html .= '</ol class="dd-list">';

        $html .= '</li>';
      }

      return $html;
    }

    public static function renderNodeSelect($node) {
      if( $node->isLeaf() ) {

        return '<option value="' . $node->name . '">' . $node->name . '</option>';

      } else {
        
        $html = '<optgroup label="' . $node->name. '">';

        foreach($node->children as $child)

          $html .= MyFunctions::renderNodeSelect($child);

        $html .= '</optgroup>';
      }

      return $html;
    }

    public static function getUnreadInbox($userID){

      $incomingActivities = IncomingActivities::where('userID', '=', $userID)
                              ->where('read', '=', 0)
                              ->get();
      return $incomingActivities->count();

    }

    public static function getUnreadDisposition($userID){

      $incomingDisposition = Disposition::where('userID', '=', $userID)
                              ->where('read', '=', 0)
                              ->get();
      return $incomingDisposition->count();

    }

    public static function human_filesize($size, $precision = 2) {
        static $units = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
        $step = 1024;
        $i = 0;
        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }
        return round($size, $precision).$units[$i];
    }

    public static function checkModule($moduledb, $module) {

      if (strpos($moduledb,$module) !== false) {
        return true;
      } else {
        return false;
      }

    }
}