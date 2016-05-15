<?php namespace App\Http;

function renderingNode($node) {

      if( $node->isLeaf() ) {
        return '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name . '</div>
                </li>';
      } else {
        $html = '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name. '</div>';

        $html .= '<ol class="dd-list>';

        foreach($node->children as $child)
          $html .= renderNode($child);

        $html .= '</ol class="dd-list>';

        $html .= '</li>';
      }

      return $html;
    }

function redirect($url){
        $element = '<script type="text/javascript">document.location.href="'.$url.'"</script>';         
    return $element;
    }
    
function potongkata($NUM,$DESCRIPTION) {
    $b_partdesc = $NUM;
    $TMPPARTDESC = array();
    $TEMP = explode(" ",$DESCRIPTION);
    for($i=0;$i<=$b_partdesc;$i++)
    {
      $TMPPARTDESC[$i] = $TEMP[$i]; 
    }
    $PARTDESC = implode(" ",$TMPPARTDESC);
    return $PARTDESC;
    }
    
function format_rupiah($val){
    $val = number_format($val);
    $val = str_replace(",",".",$val);
    $val = "Rp. ".$val."";
    
    return $val;
  }
     
function convert_time($value) {  
    $explode_date = explode("-",$value);
    $new_date = $explode_date[2]."-".$explode_date[0]."-".$explode_date[1];
    
    return $new_date;
  }
  
function reverse_calendar($value) { 
    $explode_date = explode("/",$value);
    $new_date = $explode_date[2]."-".$explode_date[1]."-".$explode_date[0];
    
    return $new_date;
  }
  
function calendar_time($value) {  
    $explode_date = explode("-",$value);
    $new_date = $explode_date[1]."-".$explode_date[2]."-".$explode_date[0];
    
    return $new_date;
  }
  
function tanggalIndo($date){
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
  
function diBulatkan($angka, &$bulat = 0, $kelipatan = 500) {
  $sisa = $angka % $kelipatan;
  if ($sisa > 0) {
    $bulat = $kelipatan - $sisa;
    $hasil = $angka + $bulat;
  }
  else
    $hasil = $angka;

  return floor($hasil);
}

function tagDecode($string){
    
    $tag = array("&lt;", "&quot;", "&gt;");
    $encode   = array("<", '"', ">");
    
    $content = str_replace($tag, $encode, $string);
    return $content;
  }
  
function cek_session(){
      
      if (empty($_SESSION['user_id'])){
        ?>
          <script type="text/javascript">     
            document.location.href="logout.php";
          </script>

        <?php
      } 
    }
    
function generateRandomNumber($digit="6"){
    $Num=rand(0,999999);
    print str_pad($Num, $digit, "0", STR_PAD_LEFT); 
  }
  
function mysql2timestamp($datetime){
       $val = explode(" ",$datetime);
       $date = explode("-",$val[0]);
       $time = explode(":",$val[1]);
       return mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
}

function showDate(){
    $tanggal = date("d-M-Y");
    $waktu=date("H:i:s");
    $t=explode(":",$waktu);
    $jam=$t[0];
    $menit=$t[1];
    
    $content = $tanggal;
    return $content;
  }

function slugName($var){
    $var = str_replace(" ", "-", $var);
    $content = strtolower($var);
    return $content;
  }

function titleName($var){
    $var = str_replace(" ", ".", $var);
    $content = $var;
    return $content;
  }

function jsName($var){
    $var = ucwords($var);
    $var = str_replace(" ", "", $var);
    /*$content = strtolower($var);*/
    $content = $var;
    return $content;
  }