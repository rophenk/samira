 @forelse($incomingDisposition as $incomingDisposition)
 <?php
$dateSend = MyFunctions::calendar_time($disposition->dateSend);

//$letter_date = MyFunctions::calendar_time($incomingDisposition->letter_date);
$letter_date = MyFunctions::reverse_date($incomingDisposition->letter_date);
?>
<table border="1" align="center" cellpadding="2" cellspacing="0" class="adminlist" width="100%">

  <tbody><tr>
    <td colspan="3" width="50%"><p align="center"><b>LEMBAR DISPOSISI</b></p></td>
    <td colspan="3">
      <p align="center"><b>{{ $incomingDisposition->work_unit_name }}</b></p>
    </td>
    <td>
      <font size="2">No. Agenda : 
      <br>Tanggal : {{ $dateSend }}</font>
    </td>
  </tr>

  <tr>
    <td colspan="3"><p align="center"><font size="2">Sifat</font></p></td>
    <td colspan="3"><p align="center"><font size="2">Derajat</font></p></td>
    <td><font size="2">Batas Waktu</font></td>
  </tr>

   <tr>
    <td colspan="3" valign="middle">
      <img src="{{URL::asset('tnde/template/template-disposisi_files/FormDisposisi_check.png')}}" width="15" height="15" align="middle">
      <font size="2"> 
      {{ $incomingDisposition->trait }}
      </font>
      </td>
    <td><p align="center"><font size="2">Segera</font></p></td>
    <td><p align="center"><font size="2">Sangat Segera</font></p></td>
    <td><p align="center"><font size="2">Kilat</font></p></td>
    <td><font size="2">Penyelesaian :</font></td>
  </tr>

  <tr>
    <td colspan="3"><font size="2">Nomor Indeks : </font></td>
    <td colspan="4"><font size="2">Kode :</font></td>
  </tr>
 
   <tr>
    <td colspan="3"><font size="2">Nomor Surat : {{ $incomingDisposition->letter_number }}</font></td>
    <td colspan="4"><font size="2">Tanggal : {{ $letter_date }}</font></td>
  </tr>

  <tr>
    <td colspan="7"><font size="2">Hal : <br>{{ $incomingDisposition->subject }}</font></td>
  </tr>

  <tr>
    <td colspan="7"><font size="2">Lampiran :</font></td>
  </tr>

  <tr>
    <td colspan="7"><font size="2">Asal Surat : {{ $incomingDisposition->sender }}</font></td>
  </tr>

  <tr>
    <td colspan="3"><b>DITERUSKAN KEPADA</b></td>
    <td colspan="4"><b>HARAP / UNTUK</b></td>
  </tr>

  <tr>
    <td colspan="3" valign="top"><font size="2"> {{ $workUnits[0]->name }}</font></td>
	   <td colspan="4" valign="top">
        <table width="100%" border="0" style="margin:5px;">
          <tbody>
            <tr>
              <td valign="top"> 
                <ul>
                @forelse($instruction as $instruction)
                    <li>{{ $instruction }}</li>
                @empty
                @endforelse
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
    </td>
  </tr>

  <tr>
    <td colspan="3"><b>TEMBUSAN KEPADA</b></td>
    <td colspan="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="3"><font size="2"> </font></td>
    <td colspan="4">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="7">
    	<font size="2"><b>CATATAN :</b> <br> {{ $disposition->note }}
        <b><div align="right">{{ $incomingDisposition->work_unit_name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></b></font>
    </td>
  </tr>

  <tr>
    <td colspan="7">
    	<font size="2">Setelah digunakan harap segera dikembalikan kepada : <br> Tanggal :</font>
    </td>
  </tr>

</tbody></table>
 @empty
@endforelse