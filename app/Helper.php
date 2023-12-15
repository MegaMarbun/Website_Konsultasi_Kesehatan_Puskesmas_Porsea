<?php 

if (! function_exists('tglWaktuIndo'))
{
	function tglWaktuIndo($parm)
	{
		if($parm == null){
			return "-";
		}
		if($parm == '0000-00-00 00:00:00'){
			return "-";
		}
		$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
		$dataBulan = date('n',strtotime($parm));
		$dataWaktu = date('H:i',strtotime($parm));
		return date('d',strtotime($parm))." ".$array_bulan[$dataBulan]." ".date('Y',strtotime($parm))." ".$dataWaktu." WIB";
	}
}

if (! function_exists('hariTglWaktuIndo'))
{
	function hariTglWaktuIndo($parm)
	{
		if($parm == '0000-00-00 00:00:00'){
			return "-";
		}
		$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
		$dataBulan = date('n',strtotime($parm));

		$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
		$dataHari = date('N',strtotime($parm));

		$dataWaktu = date('H:i:s',strtotime($parm));

		return $array_hari[$dataHari].", ".date('d',strtotime($parm))."  ".$array_bulan[$dataBulan]."  ".date('Y',strtotime($parm))."  ".$dataWaktu;
	}
}

?>