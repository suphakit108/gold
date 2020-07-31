<?php

include("../php/config.php");
include('../php/function.php');


$thaimonth=array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"); 

date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date = new DateTime;
$date_set_page = $date->format('d-m-Y');
$time_set_page = $date->format('H:i:s');

$form = getFormById($conn,$_GET['id']);
if($form['rewrite_no'] != 0){
	$form_name = $form['form_no'].'-RE-'.$form['rewrite_no'];
}
$str='
<style type="text/css">
@page{
	margin: 0.1cm;
}
body { 
	
	font-size: 8px; 
}

.condition-menu{
	color: #0a0a0a;
	font-style: inherit;
	background-color: rgb(241, 241, 241);
}
table {
	border-collapse: collapse;
	width: 100%;
	color: #6d6d6d;
	font-size: 16px;
}
label{
	font-size: 16px;
}
td, th {
	border: 1px solid #999;
	padding: 0.5rem;
	font-size: 16px;
}
</style>
';
$html_head_pdf = ' 
<table width="100%" style=" border: 0; " >
<tr style="border: 0; ">
<td align="left" width="140px" style=" border: 0;">
<p style="font-size: 10px;">
'.$date_set_page.' '.$time_set_page.'
</p>
</td>
<td align="right" style=" border: 0; ">
<p style="font-size: 10px;">
หน้าที่ {PAGENO} / {nb}
</p>
</td>  
</tr>
</table>  
';
$str.='
<meta charset="utf-8">
<div align="center">
<div class="row" style="margin-left: 8px; margin-right: 8px;">

<div class="col-lg-12">

<div class="panel-heading" align="center" style=" font-size: 16px;font-weight: bold;padding:0px;">
<div align="center">แบบฟอร์มบำรุงรักษาหม้อแปลง '.$form_name.'</div>
</div>
<br>
<div class="panel-heading" align="left" style=" font-size: 12px;font-weight: bold;padding:0px;">
<div align="left">
สถานที่ติดตั้ง : '.$form['location'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
กฟฟ : '.$form['input_1'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
PEA NO : '.$form['input_2'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
SERIAL NO : '.$form['input_3'].'<br></div>

<div align="left">
ผลิตภัณฑ์/ยี่ห้อ : '.$form['input_4'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด : '.$form['input_5'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
PHASE,VECTOR GROUP: '.$form['input_6'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
ตำแหน่ง TAP : '.$form['input_7'].'<br></div>

<div align="left">
พิกัดแรงสูง : '.$form['input_8'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
กระแส : '.$form['input_9'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
พิกัดแรงต่ำ: '.$form['input_10'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
กระแส : '.$form['input_11'].'<br></div>


<div align="left">
ขนาด FUSE แรงต่ำ เฟส A : '.$form['input_12'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส B : '.$form['input_13'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส C: '.$form['input_14'].'<br></div>

<div align="left">
ขนาด FUSE แรงต่ำ เฟส A : '.$form['input_15'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส B : '.$form['input_16'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส C: '.$form['input_17'].'<br></div>


</div>
<div class="panel-body"  align="center"  style="padding: 0px;">
<div align="right">
</div>';
$str.='
<div align="center" style="text-align:center; font-weight: bold;">
ตรวจสอบค่าทางเทคนิค
<br>
</div>';
$str.='
<table  width="100%"  class="table" >
<thead>
<tr>
<th width="10">ลำดับ</th>
<th width="80">รายการ</th>
<th width="100">ค่าที่วัดได้</th>
<th width="100">หลังแก้ไข</th>
';
$str.='
</tr>
</thead>
<tbody>';
$str.='
<tr>
<td align="center">
1
</td>
<td>
ความทนต่อแรงดันไฟฟ้าน้ำมันในหม้อแปลง
</td>
<td>
1 : '.$form['input_21'].' KV.<br>2 : '.$form['input_22'].' KV.<br>3 : '.$form['input_23'].' KV.<br>เฉลี่ย : '.$form['input_24'].' KV.<br>'.'ผลการทดสอบ : '.$form['input_25'].'<br>'.
'</td>

<td>'.
'1 : '.$form['input_26'].' KV.<br>2 : '.$form['input_27'].' KV.<br>3 : '.$form['input_28'].' KV.<br>เฉลี่ย : '.$form['input_29'].' KV.<br>'.'ผลการทดสอบ : '.$form['input_30'].'<br>'.
'</td>
</tr>

<tr>
<td align="center">
2
</td>
<td>
ค่าฉนวณขดลวด P-G
</td>
<td>
'.$form['input_31'].' เมกกะโอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_32'].'<br>'.
'</td>

<td>'.
'-</td>
</tr>


<tr>
<td align="center">
3
</td>
<td>
ค่าฉนวณขดลวด P-S
</td>
<td>
'.$form['input_33'].' เมกกะโอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_34'].'<br>'.
'</td>

<td>'.
'-</td>
</tr>


<tr>
<td align="center">
4
</td>
<td>
ค่าฉนวณขดลวด S-G
</td>
<td>
'.$form['input_35'].' เมกกะโอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_36'].'<br>'.
'</td>

<td>'.
'-</td>
</tr>

<tr>
<td align="center">
5
</td>
<td>
ค่ากราวน์ต้นหม้อแปลงด้านแรงสูง
</td>
<td>
'.$form['input_37'].' โอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_38'].'<br>'.
'</td>

<td>'.
$form['input_39'].' โอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_89'].'<br>'.
'</td>
</tr>

<tr>
<td align="center">
6
</td>
<td>
ค่ากราวน์ต้นหม้อแปลงด้านแรงต่ำ
</td>
<td>
'.$form['input_40'].' โอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_41'].'<br>'.
'</td>

<td>'.
$form['input_42'].' โอห์ม.<br>'.'ผลการทดสอบ : '.$form['input_90'].'<br>'.
'</td>
</tr>

';
$str.='
</tbody>
</table>
</div>';

$str.='<br><div align="center" style="text-align:center; font-weight: bold;">
ตรวจสอบ ตรวจเปลี่ยน และบำรุงรักษาอุปกรณ์ประกอบ
<br>
</div>';



$str.='
<table  width="100%"  class="table" >
<thead>
<tr>
<th width="10">ลำดับ</th>
<th width="80">รายการ</th>
<th width="100">สถานะ</th>
<th width="100">การดำเนินการ</th>
';
$str.='
</tr>
</thead>
<tbody>';

$str.='
<tr>
<td align="center">
1
</td>
<td>
ตัวถังและครีบหม้อแปลง
</td>
<td>
'.$form['input_43'].'
</td>
<td>
'.$form['input_44'].'
</td>
</tr>



<tr>
<td align="center">
2
</td>
<td>
BUSHING แรงสูงและขั้วต่อ (CONNECTOR)
</td>
<td>
'.$form['input_45'].'
</td>
<td>
'.$form['input_46'].'
</td>
</tr>


<tr>
<td align="center">
3
</td>
<td>
BUSHING แรงต่ำและขั้วต่อ (CONNECTOR)
</td>
<td>
'.$form['input_47'].'
</td>
<td>
'.$form['input_48'].'
</td>
</tr>


<tr>
<td align="center">
4
</td>
<td>
TAP CHANGER
</td>
<td>
'.$form['input_49'].'
</td>
<td>
'.$form['input_50'].'
</td>
</tr>


<tr>
<td align="center">
5
</td>
<td>
ARCING HORN
</td>
<td>
'.$form['input_51'].'
</td>
<td>
'.$form['input_52'].'
</td>
</tr>



<tr>
<td align="center">
6
</td>
<td>
ขั้วต่อสายดิน
</td>
<td>
'.$form['input_53'].'
</td>
<td>
'.$form['input_54'].'
</td>
</tr>



<tr>
<td align="center">
7
</td>
<td>
ล่อฟ้าแรงสูง
</td>
<td>
'.$form['input_55'].'
</td>
<td>
'.$form['input_56'].'
</td>
</tr>


<tr>
<td align="center">
8
</td>
<td>
ล่อฟ้าแรงต่ำ
</td>
<td>
'.$form['input_57'].'
</td>
<td>
'.$form['input_58'].'
</td>
</tr>


<tr>
<td align="center">
9
</td>
<td>
DROP OUT FUSE CUT OUT และจุดต่อสาย
</td>
<td>
'.$form['input_59'].'
</td>
<td>
'.$form['input_60'].'
</td>
</tr> 

<tr>
<td align="center">
10
</td>
<td>
LT SW และจุดต่อสาย
</td>
<td>
'.$form['input_61'].'
</td>
<td>
'.$form['input_62'].'
</td>
</tr>

<tr>
<td align="center">
11
</td>
<td>
PG CONNECTOR
</td>
<td>
'.$form['input_63'].'
</td>
<td>
'.$form['input_64'].'
</td>
</tr>
';



$str.='</tbody>
</table>';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$str.='<br>
<div align="center" style="text-align:center; font-weight: bold;">
ค่าทางเทคนิค
<br>
</div>';



$str.='
<table  width="100%"  class="table" >
<thead>
<tr>
<th width="10">ลำดับ</th>
<th width="80">รายการ</th>
<th width="100">สถานะ</th>
<th width="100">การดำเนินการ</th>
';
$str.='
</tr>
</thead>
<tbody>';
$str_part ='';
if($form['input_70'] != ''){
	$str_part .= $form['input_70'].' ';
}

if($form['input_71'] != ''){
	$str_part .= $form['input_71'].' ';
}

if($form['input_72'] != ''){
	$str_part .= $form['input_72'].' ';
}


$str.='
<tr>
<td align="center">
1
</td>
<td>
ระดับน้ำมันหล้อแปลงในถังอะไหล่
</td>
<td>
'.$form['input_65'].'
</td>
<td>
'.$form['input_66'].'
</td>
</tr>



<tr>
<td align="center">
2
</td>
<td>
สภาพสารดูดความชื้น
</td>
<td>
'.$form['input_67'].'
</td>
<td>
'.$form['input_68'].'
</td>
</tr>


<tr>
<td align="center">
3
</td>
<td>
สถาพปะเก็นและลูกยางต่างๆ
</td>
<td>
'.$form['input_69'].'
</td>
<td>
'.$str_part.'
</td>
</tr>


<tr>
<td align="center">
4
</td>
<td>
หมายเลข PEA ของหม้อแปลง
</td>
<td>
'.$form['input_73'].'
</td>
<td>
'.$form['input_74'].'
</td>
</tr>


<tr>
<td align="center">
5
</td>
<td>
สภาพเสา/คาน ต้นติดตั้งหม้อแปลง
</td>
<td>
'.$form['input_75'].'
</td>
<td>
'.$form['input_76'].'
</td>
</tr>



<tr>
<td align="center">
6
</td>
<td>
ต้นไม้เถาวัลย์ เสาหม้อแปลงและบริเวณรอบๆ
</td>
<td>
'.$form['input_77'].'
</td>
<td>
'.$form['input_78'].'
</td>
</tr>


';



$str.='</tbody>
</table>';
$str.='

<br>
<div class="panel-heading" align="left" style=" font-size: 9px;font-weight: bold;padding:0px;">
<div align="left">
กระแส : เฟส A '.$form['input_79'].'  AMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
เฟส B '.$form['input_80'].'  AMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
เฟส C '.$form['input_81'].'  AMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 


แรงดัน : A-N '.$form['input_82'].'  VOLT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
B-N '.$form['input_83'].'  VOLT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
C-N '.$form['input_84'].'  VOLT<br></div>

<div align="left">
สภาพการรับ LOAD : '.$form['input_85'].'  %&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
'.$form['input_86'].'  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ตรวจสอบวันที่ : '.$form['input_87'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
เวลา : '.$form['input_88'].'  น<br></div>




</div>';
$str.='
<br>

<div style="display: table-cell; vertical-align:middle; ">
<table class="no-border" style="display:inline-block; margin-left: auto;   margin-right: auto;">
<tr class="no-border"  height="40">
<td class="panel-heading no-border" align="left"  style=" font-size: 10px;font-weight: bold;padding-top:18;padding-bottom:18;">
ลงชื่อ………………….......…….…………….ผู้ใช้ไฟ/ผู้ปฎิบัติงาน/ผู้รับจ้าง<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(………………….......…….…………….)	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....…...…/…......……/……......….	
</td>
<td class="panel-heading no-border" align="left" style=" font-size: 10px;font-weight: bold;padding-top:18;padding-bottom:18;">
ลงชื่อ………………….......…….…………….ผู้ปฎิบัติงาน/หฝ./ผู้ควบคุม	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(………………….......…….…………….)	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...….....…/…......……/…..…....….	
</td>
</tr>
</table>
</div>
</div>';




if($_GET['type'] == "PDF"){
	// echo "<pre>";
	// print_r($oilstock);
	// echo "</pre>";

	// echo $str;

	include("../lib/mpdf/mpdf.php");

	$mpdf=new mPDF('th', 'A4', '0', 'garuda');   
	$mpdf->mirrorMargins = true;
	$mpdf->SetHTMLHeader($html_head_pdf,'O');
	$mpdf->SetHTMLHeader($html_head_pdf,'E');
	// $mpdf->SetDisplayMode('fullpage','two');
	$mpdf->AddPage('P', // L - landscape, P - portrait 
		'', '', '', '',
	10, // margin_left
	10, // margin right
	5, // margin top
	5, // margin bottom
	5, // margin header
	0); // margin foote
	$mpdf->WriteHTML($str);
	$mpdf->Output();
}
if($_GET['type'] == "DOWNLOAD"){
	// echo "<pre>";
	// print_r($oilstock);
	// echo "</pre>";

	// echo $str;

	include("../lib/mpdf/mpdf.php");

	$mpdf=new mPDF('th', 'A4', '0', 'garuda');   
	$mpdf->mirrorMargins = true;
	$mpdf->SetHTMLHeader($html_head_pdf,'O');
	$mpdf->SetHTMLHeader($html_head_pdf,'E');
	// $mpdf->SetDisplayMode('fullpage','two');
	$mpdf->AddPage('P', // L - landscape, P - portrait 
		'', '', '', '',
	10, // margin_left
	10, // margin right
	5, // margin top
	5, // margin bottom
	5, // margin header
	0); // margin foote
	$mpdf->WriteHTML($str);
	$mpdf->Output($d1.$d2.$d3.$d4.$d5.'.pdf','D');
}
// else if($_GET['type'] == "Excel"){
// 	header("Content-type: application/vnd.ms-excel");
// 	// header('Content-type: application/csv'); //*** CSV ***//

// 	header("Content-Disposition: attachment; filename=delivery_driver$d1-$d2-$d3 $d4:$d5:$d6.xls");
// 	echo $str;
// }
// echo "$str";
?>
</div>
</div>