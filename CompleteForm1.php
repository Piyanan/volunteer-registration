<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<style type="text/css">
@media print{
#no_print{display:none;}
}
</style>
<title>15th Asean University Thailand : Summary</title>
</head>


<body>

<?php

include("connect.php");

$sql="select max(id) from personalinfo";
if (!$result=mysql_query($sql,$link))
 {
  die('Error max id: ' . mysql_error());
 }
else {
$temp = mysql_fetch_array($result);
$id=$temp[0]+1;
//echo "max id get ".$id;
}
//------------------------------------------------begin-----------------------------------------------------------------
		print "<font face=angsanaupc><font size=4>";
		print "<center><b>���Ѥ�������Ѥ� (����Ѻ�ѡ�֡��)<br>
				����觢ѹ��������Է���������¹ ���駷�� 15
				�����ҧ�ѹ��� 15-23 �ѹ�Ҥ� 2553 �ѧ��Ѵ��§����<br></b></center></font>";
				
				
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<font size=4><b><u>�����ŷ����</u></b></font>";
		
		print "<font size=4><table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td><td>����(������) :  </td><td align=center><u>&nbsp " .$_POST["tFirstname"];
		print "&nbsp </u></td>";
		print "<td>���ʡ��(������) : </td><td align=center><u>&nbsp" .$_POST["tLastname"];
		print "&nbsp </u></td></tr>";
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����(�����ѧ���) : </td><td><u> &nbsp " .$_POST["tFirstnameEn"];
		print "&nbsp  </u> </td>";
		print "<td>���ʡ��(�����ѧ���) : </td><td><u> &nbsp " .$_POST["tLastnameEn"];
		print " &nbsp </u> </td></tr> </table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�� : </td><td><u>&nbsp " .$_POST["listSex"];
		print " &nbsp </u></td> ";
		print "<td>��ʹ� : </td><td><u> &nbsp  " .$_POST["tReligion"];
		print " &nbsp </u></td> ";
		print "<td>���� : </td><td><u> &nbsp " .$_POST["tAge"];
		print " &nbsp  </u></td><td> ��</td> ";
		print "<td>�ѹ/��͹/���Դ : </td><td><u> &nbsp " .$_POST["listDay"]."/" .$_POST["listMonth"]."/" .$_POST["listYear"]."  &nbsp </u></td></tr></table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>���ѧ�֡�������褳� : </td><td><u> &nbsp " .$_POST["tFaculty"];
		print "&nbsp </u></td>";
		print "<td>�Ң��Ԫ� : </td><td><u> &nbsp " .$_POST["tMajor"];
		print "&nbsp </u></td></tr></table> ";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�дѺ����֡�� : </td><td><u>&nbsp " .$_POST["listEducation"];
		print "&nbsp </u></td> ";
		print "<td>��鹻շ�� : </td><td><u> &nbsp " .$_POST["listClass"];
		print " &nbsp </u></td>";
		print "<td>ʶҺѹ����֡�� : </td><td><u> &nbsp " .$_POST["tInstitution"];
		print "&nbsp </u></td></tr></table> ";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�������������ö�Դ����� : </td> ";
		print "<td>�Ţ���  </td><td><u>&nbsp " .$_POST["tNo"];
		print "&nbsp </u></td>";
		print "<td>������  </td><td><u>&nbsp " .$_POST["tVillageNo"]; 
		print "&nbsp </u></td> ";
		print "<td>���  </td><td><u> &nbsp &nbsp " .$_POST["tRoad"];
		print "&nbsp &nbsp </u></td>";
		print "<td>���  </td><td><u> &nbsp &nbsp " .$_POST["tBlock"];
		print "&nbsp &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�ǧ/�Ӻ� </td><td><u> &nbsp " .$_POST["tSubDistrict"];
		print "&nbsp </u></td>";
		print "<td>�����/ࢵ </td><td><u> &nbsp " .$_POST["tDistrict"]; 
		print "&nbsp </u></td> ";
		print "<td>�ѧ��Ѵ </td><td><u> &nbsp " .$_POST["tProvince"];
		print "&nbsp </u></td>";
		print "<td>������ɳ��� </td><td><u> &nbsp " .$_POST["tZIPcode"]." &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�������Ѿ����Ͷ�� : </td><td><u> &nbsp " .$_POST["tMobile"]." &nbsp </u></td> "; 
		print "<td>�������Ѿ���ҹ : </td><td><u> &nbsp " .$_POST["tTel"]." &nbsp </u></td></tr></table>"; 
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>E-Mail : </td><td><u> &nbsp " .$_POST["tEmail"]." &nbsp </u></td> "; 
		print "<td>�óթء�Թ����ö�Դ������������Ţ���Ѿ�� : </td><td><u> &nbsp " .$_POST["tEmergency"]." &nbsp </u></td></tr></table> "; 

		//print "<br>";
	
//---------------------------------------------��������ö��л��ʺ��ó�----------------------------------------------------------------------

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>��������ö��л��ʺ��ó�</u></b>";
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "���ҷ�趹Ѵ����дѺ�ͧ���ҷ�趹Ѵ";

		print "<br><table>";
if ($_POST["langen"] == true){
		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>�����ѧ��� &nbsp </td> <td> �дѺ ";
		print $_POST["radlevel1"]."</td></tr>";
}
if ($_POST["langchc"] == true){
		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>���Ҩչ��ҧ &nbsp </td> <td> �дѺ  ";
		print $_POST["radlevel2"]."</td></tr>";
}
if ($_POST["langchk"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td>���Ҩչ��ҧ��� &nbsp </td> <td> �дѺ  ";
		print $_POST["radlevel3"]." </td></tr>";
}
if ($_POST["langoth1"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>����".$_POST["other1"]." &nbsp </td> <td>  �дѺ " ;
		print $_POST["radlevel4"]."</td></tr>";
}
if ($_POST["langoth2"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>����".$_POST["other2"]." &nbsp </td> <td>  �дѺ " ;
		print $_POST["radlevel5"]."</td></tr>";
}
if ($_POST["langoth3"] == true){
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print  "<td>����".$_POST["other3"]." &nbsp </td> <td>  �дѺ " ;
		print $_POST["radlevel6"]."</td></tr>";
}
		
print "</table>";

//----------------------------------------------���˹觫�觻��ʧ��з�---------------------------------------------------------------------

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>���˹觫�觻��ʧ��з�</u></b>";
		
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "�ѹ�Ѻ��� 1 : Volunteer ";
		print  $_POST["listPositionRank_1"];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "�ѹ�Ѻ��� 2 : Volunteer ";
		print $_POST["listPositionRank_2"];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "�ѹ�Ѻ��� 3 : Volunteer ";
                            print $_POST["listPositionRank_3"];
		print "<br>";

//----------------------------------------�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ���------------------------------------------------

if($_POST["listPositionRank_1"]=="��Шӡ���"||$_POST["listPositionRank_2"]=="��Шӡ���"||$_POST["listPositionRank_3"]=="��Шӡ���"){
                            print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
                            print "<b>�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ��� </b><br>";
                            print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>�ѹ�Ѻ��� 1 : &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>����� : ".$_POST["listCountry_1"];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>��Դ���� : " .$_POST["listSport_1"]."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td> ";
		print "<td>�ѹ�Ѻ��� 2 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����� : " .$_POST["listCountry_2"];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>��Դ���� : " .$_POST["listSport_2"]."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>�ѹ�Ѻ��� 3 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����� : ".$_POST["listCountry_3"];
		print "&nbsp&nbsp&nbsp</td>";
		print "<td>��Դ���� : " .$_POST["listSport_3"]."</td></tr></table>";
}

//---------------------------------------------end page----------------------------------------------------------------------

		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>��駹����ѹ������Ѥèй���ѡ�ҹ���仹���Ҵ���</b>";		
		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " - �ٻ���¢�Ҵ 1 ���� �ӹǹ 2 �ٻ (�������¹���ʹ�ҹ��ѧ�ٻ����)";
		print "<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " - �͡��û�Сͺ��þԨ�ó� �� ��÷��ͺ��ҹ���� �繵�" ;
		print "<br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "���Ѻ�ͧ ���Ҿ��Ң��Ѻ�ͧ��Ҽ����Ѥä������ʶҹ�Ҿ�繹ѡ�֡��㹪�ǧ���ҡ���觢ѹ��������Է���������¹ ���駷�� 15 �����ҧ�ѹ��� 15-23 �ѹ�Ҥ� 2553 �ѧ��Ѵ��§����";
		print "<table><tr><td width=300></td>";
		print "<td align=center>�Ҩ�������֡�� _____________________________________</td></tr>";
		print "<tr><td></td><td align=center>( &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp)</td></tr>";
		print "<tr><td></td><td align=center>ŧ���ͼ����Ѥ� _____________________________________</td></tr>";
		print "<tr><td></td><td align=center>( &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp)</td></tr>";
		print "<tr><td></td><td align=center>�ѹ��� ___ ��͹ __________�.�. 2553</td></tr></table>";
			
		print "</font></font>";
		

//---------------------------------------SQL----------------------------------------------------------------------


//��ҧ��ҧ����͵Դ��� Database �͹��������ͧ���ҧ��� personalInfo �Ѻ contactInfo

$birthdate =  $_POST["listYear"].$_POST["listMonth"] .$_POST["listDay"];

if($_POST[tFirstname]!=NULL&&$_POST[tInstitution]!=NULL&&$_POST[tEmail]!=NULL)
{
//-----------------------------------pesonal--------------------------------------------------------------------------------

$sql="INSERT INTO personalinfo (id,fnameth,lnameth,fnameen,lnameen,gender,religion,age,birthdate,faculty,major,degree,grade,institution)
VALUES
('$id','$_POST[tFirstname]','$_POST[tLastname]','$_POST[tFirstnameEn]','$_POST[tLastnameEn]','$_POST[listSex]','$_POST[tReligion]','$_POST[tAge]','$birthdate','$_POST[tFaculty]','$_POST[tMajor]','$_POST[listEducation]','$_POST[listClass]','$_POST[tInstitution]')";

if (!mysql_query($sql,$link))
 {
  die('Error person: ' . mysql_error());
 }
//else echo "personal 1 record added";

//----------------------------------------contact---------------------------------------------------------------------------

$sql="INSERT INTO contactinfo (id,number,moo,street,soi,tumbol,aumpher,province,zipcode,mobilephone,phone,email,emerphone)
VALUES
('$id','$_POST[tNo]','$_POST[tVillageNo]','$_POST[tRoad]','$_POST[tBlock]','$_POST[tSubDistrict]','$_POST[tDistrict]','$_POST[tProvince]','$_POST[tZIPcode]','$_POST[tMobile]','$_POST[tTel]','$_POST[tEmail]','$_POST[tEmergency]')";

if (!mysql_query($sql,$link))
 {
  die('Errorcontact: ' . mysql_error());
 }
//else echo "contact 1 record added";

//----------------------------------------���ҷ�趹Ѵ---------------------------------------------------------------------------
if ($_POST["langen"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','�ѧ���','$_POST[radlevel1]')";
	if (!mysql_query($sql,$link))
 	{
 		die('Error���ҷ�趹Ѵ: ' . mysql_error());
 	}
	//else echo "���ҷ�趹Ѵ 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langchc"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','�չ��ҧ','$_POST[radlevel2]')";
	if (!mysql_query($sql,$link))
	 {
 		 die('Error���ҷ�趹Ѵ: ' . mysql_error());
 	}
	//else echo "���ҷ�趹Ѵ 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langchk"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','�չ��ҧ���','$_POST[radlevel3]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Error���ҷ�趹Ѵ: ' . mysql_error());
	 }
	//else echo "���ҷ�趹Ѵ 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth1"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other1]','$_POST[radlevel4]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Error���ҷ�趹Ѵ: ' . mysql_error());
	 }
	//else echo "���ҷ�趹Ѵ 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth2"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other2]','$_POST[radlevel5]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Error���ҷ�趹Ѵ: ' . mysql_error());
	 }
	//else echo "���ҷ�趹Ѵ 1 record added";
}
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
if($_POST["langoth3"] == true){
	$sql="INSERT INTO langskill (id,lang,level)
	VALUES
	('$id','$_POST[other3]','$_POST[radlevel6]')";
	if (!mysql_query($sql,$link))
	 {
		  die('Error���ҷ�趹Ѵ: ' . mysql_error());
	 }
	//else echo "���ҷ�趹Ѵ 1 record added";
}

//----------------------------------------���˹觫�觻��ʧ��з�---------------------------------------------------------------------------
if($_POST["listPositionRank_1"]=="��Шӡ���"||$_POST["listPositionRank_2"]=="��Шӡ���"||$_POST["listPositionRank_3"]=="��Шӡ���")
	$sport=1;
else
	$sport=0;

$sql="INSERT INTO wantstaff (id,first,second,third,sport)
VALUES
('$id','$_POST[listPositionRank_1]','$_POST[listPositionRank_2]','$_POST[listPositionRank_3]','$sport')";

if (!mysql_query($sql,$link))
{
	die('Error���˹觫�觻��ʧ��з�: ' . mysql_error());
 }
//else echo "���˹觫�觻��ʧ��з� 1 record added";
//---------------------------�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ��� ----------------------------------------------------------
if($_POST["listPositionRank_1"]=="��Шӡ���"||$_POST["listPositionRank_2"]=="��Шӡ���"||$_POST["listPositionRank_3"]=="��Шӡ���"){
	$sql="INSERT INTO sport (id,1stcountry,1stsport,2ndcountry,2ndsport,3rdcountry,3rdsport)
	VALUES
	('$id','$_POST[listCountry_1]','$_POST[listSport_1]','$_POST[listCountry_2]','$_POST[listSport_2]','$_POST[listCountry_3]','$_POST[listSport_3]')";

	if (!mysql_query($sql,$link))
	 {
 		 die('Error�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ���: ' . mysql_error());
	 }
	//else echo "�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ��� 1 record added";
}

//---------------------------committee ----------------------------------------------------------
$sql="INSERT INTO committee (id)
VALUES
('$id')";

if (!mysql_query($sql,$link))
{
	die('Error committee: ' . mysql_error());
 }
//else echo "committee 1 record added";
}//if sql ������
	?>
<p><center>


<div id="no_print">
<input type="image" src="image1/print1pp.jpg"  id=button1 name=button1 onClick="window.print();" >
</div>

        </center>






</body>
</html>
