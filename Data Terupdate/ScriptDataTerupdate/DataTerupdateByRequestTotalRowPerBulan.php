<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Homepage by Laravel, Website Icon by https://www.favicon-generator.org/ -->
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="/../IconWebsite/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/../IconWebsite/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/../IconWebsite/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/../IconWebsite/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/../IconWebsite/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/../IconWebsite/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/../IconWebsite/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/../IconWebsite/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/../IconWebsite/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/../IconWebsite/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/../IconWebsite/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/../IconWebsite/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/../IconWebsite/favicon-16x16.png">
<link rel="manifest" href="/../IconWebsite/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="IconWebsite/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Tanggal, Total Row Per Bulan dan Keseluruhan table API BUMN</title>
	<center>
	<a href="/../HomepageDataTerupdate.php"> <img class="Logo" src="/../TelkomIndonesia.jpg" style="height:200px;width:310px" title="Kembali ke Menu Utama"> </a>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
	    .Logo{
		transition: transform .5s ease;
	    }
	    .Logo:hover{
		transform: scale(1.1);
	    }
        </style>
<?php 
      if(isset($_GET['database'])){
	  $database=$_GET['database'];
      }
      else{
      	  $database="web";
      }
      if(isset($_GET['port'])){
	  $port=$_GET['port'];
      }
      else{
      	  $port="14113";
      }
      if(isset($_GET['user'])){
	  $user=$_GET['user'];
      }
      else{
      	  $user="u_web";
      }
      if(isset($_GET['password'])){
	  $password=strrev($_GET['password']);
	  $password=str_rot13($password);
	  $password=base64_decode($password);
      }
      else{
      	  $password="PT Telekomunikasi Indonesia";
      }
      if(isset($_GET['host'])){
	  $HOST=$_GET['host'].":".$port;
      }
      else{
      	  $HOST="pen-dev.udata.id";
	  $HOST=$HOST.":";
	  $HOST=$HOST.$port;
      }
      if(isset($_GET['year'])){ 
	  $year=$_GET['year']; 
      }
      else{ 
	  $year=date("Y");
      }
?>
<h2> Data Terupdate, Total Row Perbulan dan Keseluruhan Table API untuk BUMN per <div id="dated"></div> 
<?php echo "Database " .$database?><br>
                    <script type="text/javascript">
                    //Source : stackoverflow.com
                    function showTime() {
                        var date = new Date(),
                        utc = new Date(Date.UTC(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate(),
                        date.getHours()-7,
                        date.getMinutes(),
                        date.getSeconds()
                    ));
                    var today = new Date();
                    var hh = today.getHours();
                    var mmm = today.getMinutes();
                    var ss = today.getSeconds();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var d = today.getDay();
                    var yyyy = today.getFullYear();
                    //Display hari dengan teks
                    if(d == 1){
                        day = "Senin";
                    }
                    else if(d == 2){
                        day = "Selasa";
                    }
                    else if(d == 3){
                        day = "Rabu";
                    }
                    else if(d == 4){
                        day = "Kamis";
                    }
                    else if(d == 5){
                        day = "Jumat";
                    }
                    else if(d == 6){
                        day = "Sabtu";
                    }
                    else if(d == 7){
                        day = "Minggu";
                    }
                    else if(d == 0){
                        day = "Minggu";
                    } 
                    //Display bulan dengan teks
                    if(mm == 1){
                        m = "Januari";
                    }
                    else if(mm == 2){
                        m = "Februari";
                    }
                    else if(mm == 3){
                        m = "Maret";
                    }
                    else if(mm == 4){
                        m = "April";
                    }
                    else if(mm == 5){
                        m = "Mei";
                    }
                    else if(mm == 6){
                        m = "Juni";
                    }
                    else if(mm == 7){
                        m = "Juli";
                    }
                    else if(mm == 8){
                        m = "Agustus";
                    }
                    else if(mm == 9){
                        m = "September";
                    }
                    else if(mm == 10){
                        m = "Oktober";
                    } 
                    else if(mm == 11){
                        m = "November";
                    }
                    else if(mm == 12){
                        m = "Desember";
                    }
                    var today = day +', '+ dd + ' ' + m + ' ' + yyyy;
                        document.getElementById('dated').innerHTML = today;
                    }
		showTime();
                </script> </h2>
<style type="text/css">
th {
font-family: 'Nunito', sans-serif;
font-size: .8em;
font-weight: bold;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: 'Nunito', sans-serif;
font-size: .8em;
border: 1px solid #DDD;
}
</style>
<?php
     $mysqli = new mysqli($HOST, $user, $password, $database);
     if ($mysqli -> connect_errno) {
        echo "Gagal Menyambungkan ke MySQL, Error : " . $mysqli -> connect_error;
        exit();
     }
     $query = "SELECT 'Telkom' AS nama_BUMN, 'DM_PEN_ARPU_NASIONAL' AS nama_tabel ,
CASE
  WHEN max(PERIOD) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(PERIOD),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di PERIOD salah) ',max(PERIOD))
  WHEN SUBSTRING(max(PERIOD),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(PERIOD),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di PERIOD salah) ',max(PERIOD))
  ELSE max(PERIOD) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(PERIOD,5,6)=1 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(PERIOD,5,6)=2 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(PERIOD,5,6)=3 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(PERIOD,5,6)=4 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(PERIOD,5,6)=5 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(PERIOD,5,6)=6 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(PERIOD,5,6)=7 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(PERIOD,5,6)=8 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(PERIOD,5,6)=9 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(PERIOD,5,6)=10 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(PERIOD,5,6)=11 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(PERIOD,5,6)=12 AND substring(PERIOD,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM DM_PEN_ARPU_NASIONAL dpan
UNION ALL
SELECT 'Telkom' AS nama_BUMN, 'dm_arpu_telkom' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_arpu_telkom
UNION ALL
SELECT 'Bulog' AS nama_BUMN, 'dm_bansos_covid_bulog' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_bansos_covid_bulog
UNION ALL
SELECT 'Bio Farma' AS nama_BUMN, 'dm_bantuan_csr_biofarma' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_bantuan_csr_biofarma
UNION ALL
SELECT 'Citilink' AS nama_BUMN, 'dm_cargo_citilink' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_departure) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_departure) > NOW() THEN CONCAT('(!! tanggal_departure salah)',max(tanggal_departure))
  ELSE max(tanggal_departure)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_departure,6,7)=1 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal_departure,6,7)=2 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=3 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=4 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=5 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=6 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=7 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=8 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=9 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=10 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=11 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=12 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_cargo_citilink
UNION ALL
SELECT 'Citilink' AS nama_BUMN, 'dm_passenger_citilink' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_departure) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_departure) > NOW() THEN CONCAT('(!! tanggal_departure salah)',max(tanggal_departure))
  ELSE max(tanggal_departure)
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_departure,6,7)=1 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal_departure,6,7)=2 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=3 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=4 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=5 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=6 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=7 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=8 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=9 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=10 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=11 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal_departure,6,7)=12 AND substring(tanggal_departure,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_passenger_citilink
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_commodity_inalum' AS nama_tabel , 
 CASE
  WHEN max(periode) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(periode) > CURDATE() THEN CONCAT('(!! periode salah) ',max(periode))
  ELSE max(periode) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(periode,6,7)=1 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(periode,6,7)=2 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(periode,6,7)=3 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(periode,6,7)=4 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(periode,6,7)=5 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(periode,6,7)=6 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(periode,6,7)=7 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(periode,6,7)=8 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(periode,6,7)=9 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(periode,6,7)=10 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(periode,6,7)=11 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(periode,6,7)=12 AND substring(periode,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_commodity_inalum
UNION ALL
SELECT 'Semen Indonesia' AS nama_BUMN, 'dm_csr_semen_indonesia' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_csr_semen_indonesia
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_komersil_jamkrindo' AS nama_tabel ,
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_komersil_jamkrindo
UNION ALL
SELECT 'Jamkrindo' AS nama_BUMN, 'dm_kur_pen_jamkrindo' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_kur_pen_jamkrindo
UNION ALL
SELECT 'Inalum' AS nama_BUMN, 'dm_lme_inalum' AS nama_tabel ,  
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_lme_inalum
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_mapping_peta_mkes' AS nama_tabel , '(tidak ada atribut tanggal)' AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 '' AS Januari_" .$year. ", 
 '' AS Februari_" .$year. ",
 '' AS Maret_" .$year. ",
 '' AS April_" .$year. ",
 '' AS Mei_" .$year. ",
 '' AS Juni_" .$year. ",
 '' AS Juli_" .$year. ",
 '' AS Agustus_" .$year. ",
 '' AS September_" .$year. ",
 '' AS Oktober_" .$year. ",
 '' AS November_" .$year. ",
 '' AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_mapping_peta_mkes dmpm 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_page_2_map_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_page_2_map_mkes 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_bumn_covid_readiness_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_bumn_covid_readiness_mkes dbcrm2 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_daily_data_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_daily_data_mkes dddm2 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_infrastruktur_ready_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_infrastruktur_ready_mkes dirm 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_pergerakan_suspek_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_pergerakan_suspek_mkes 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_rs_data_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_rs_data_mkes 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_supplier_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_supplier_mkes 
UNION ALL
SELECT 'Menteri Kesehatan' AS nama_BUMN, 'dm_vendor_mkes' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_vendor_mkes 
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_pendapatan_Penjualan_pln' AS nama_tabel ,  
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_pendapatan_Penjualan_pln
UNION ALL
SELECT 'PLN' AS nama_BUMN, 'dm_stimulus_covid19_pln' AS nama_tabel ,   
 CASE
  WHEN max(blnthn) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN SUBSTRING(max(blnthn),1,4) > YEAR(CURDATE()) THEN CONCAT('(!! tahun di blnthn salah) ',max(blnthn))
  WHEN SUBSTRING(max(blnthn),5,6) > MONTH(CURDATE()) AND SUBSTRING(max(blnthn),1,4)=YEAR(CURDATE()) THEN CONCAT('(!! bulan di blnthn salah) ',max(blnthn))
  ELSE max(blnthn) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(blnthn,5,6)=1 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(blnthn,5,6)=2 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(blnthn,5,6)=3 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(blnthn,5,6)=4 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(blnthn,5,6)=5 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(blnthn,5,6)=6 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(blnthn,5,6)=7 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(blnthn,5,6)=8 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(blnthn,5,6)=9 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(blnthn,5,6)=10 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(blnthn,5,6)=11 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(blnthn,5,6)=12 AND substring(blnthn,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_stimulus_covid19_pln
UNION ALL
SELECT 'PELNI' AS nama_BUMN, 'dm_pergerakan_kapal_penumpang_pelni' AS nama_tabel ,  
 CASE
  WHEN max(tanggal_origin) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal_origin) > CURDATE() THEN CONCAT('(!! tanggal_origin salah) ',max(tanggal_origin))
  ELSE max(tanggal_origin) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal_origin,6,7)=1 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal_origin,6,7)=2 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=3 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=4 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=5 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=6 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=7 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=8 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=9 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=10 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=11 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal_origin,6,7)=12 AND substring(tanggal_origin,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_pergerakan_kapal_penumpang_pelni
UNION ALL
SELECT 'Askrindo' AS nama_BUMN, 'dm_produk_askrindo' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_produk_askrindo
UNION ALL
SELECT 'Pos Indonesia' AS nama_BUMN, 'dm_produksi_pos' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_produksi_pos
UNION ALL
SELECT 'Pegadaian' AS nama_BUMN, 'dm_restrukturisasi_kredit_pgadai' AS nama_tabel , 
 CASE
  WHEN max(tanggal) IS NULL THEN '(tidak ada data sama sekali)'
  WHEN max(tanggal) > CURDATE() THEN CONCAT('(!! tanggal salah) ',max(tanggal))
  ELSE max(tanggal) 
 END AS data_terupdate, CURRENT_DATE() AS tanggal_pengecekan, 
 count(case when substring(tanggal,6,7)=1 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Januari_" .$year. ", 
 count(case when substring(tanggal,6,7)=2 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Februari_" .$year. ",
 count(case when substring(tanggal,6,7)=3 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Maret_" .$year. ",
 count(case when substring(tanggal,6,7)=4 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS April_" .$year. ",
 count(case when substring(tanggal,6,7)=5 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Mei_" .$year. ",
 count(case when substring(tanggal,6,7)=6 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juni_" .$year. ",
 count(case when substring(tanggal,6,7)=7 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Juli_" .$year. ",
 count(case when substring(tanggal,6,7)=8 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Agustus_" .$year. ",
 count(case when substring(tanggal,6,7)=9 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS September_" .$year. ",
 count(case when substring(tanggal,6,7)=10 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Oktober_" .$year. ",
 count(case when substring(tanggal,6,7)=11 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS November_" .$year. ",
 count(case when substring(tanggal,6,7)=12 AND substring(tanggal,1,4)=" .$year. " then 1 else null end) AS Desember_" .$year. ", count(*) AS jumlah_row_tabel FROM dm_restrukturisasi_kredit_pgadai";
if ($result = $mysqli -> query($query)) {
 echo '<div style="overflow-x:auto;">';
 echo "<table>";
 echo "<tr><th> Nama BUMN </th><th> Nama Tabel </th><th> Data Terupdate </th><th> Tanggal Pengecekan </th><th> Januari " .$year. " </th><th> Februari " .$year. " </th><th> Maret " .$year. " </th><th> April " .$year. " </th><th> Mei " .$year. " </th><th> Juni " .$year. " </th><th> Juli " .$year. " </th><th> Agustus " .$year. " </th><th> September " .$year. " </th><th> Oktober " .$year. " </th><th> November " .$year. " </th><th> Desember " .$year. " </th><th> Jumlah Row tabel Keseluruhan </th></tr>";
 while( $row = $result -> fetch_array() )
    {
      //echo $row['nama_BUMN'] . " " . $row['nama_tabel'] . " " . $row['tanggal_terupdate'] . " " . $row['jumlah_row_tabel'];
      echo "<tr><td>" . $row['nama_BUMN'] . "</td><td>" . $row['nama_tabel'] . "</td><td>" . $row['data_terupdate'] . "</td><td>" . $row['tanggal_pengecekan'] . "</td><td>" . $row['Januari_' .$year] . "</td><td>" . $row['Februari_' .$year] . "</td><td>" . $row['Maret_' .$year] . "</td><td>" . $row['April_' .$year] . "</td><td>" . $row['Mei_' .$year] . "</td><td>" . $row['Juni_' .$year] . "</td><td>" . $row['Juli_' .$year] . "</td><td>" . $row['Agustus_' .$year] . "</td><td>" . $row['September_' .$year] . "</td><td>" . $row['Oktober_' .$year] . "</td><td>" . $row['November_' .$year] . "</td><td>" . $row['Desember_' .$year] . "</td><td>" . $row['jumlah_row_tabel'] . "</td></tr>";
      //echo "<br />";
    }
 echo "</table>";
 echo "</div>";
}
else {
   echo "!!Syntax SQL Gagal dieksekusi <br> !!";
   echo $mysqli -> error."<br>";
}
$mysqli -> close();
?>
</center>
</body>
</html>
