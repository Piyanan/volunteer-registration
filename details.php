<?

$id=$_GET['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>15th Asean University Thailand </title>
</head>


<body>
<?
include("connect.php");

//----------------------------------------personal---------------------------------------------------
$sql="select * from personalinfo where id =".$id;
$result=mysql_query($sql,$link);
$rowperson=mysql_fetch_array($result);
		print "<font face=angsanaupc><br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<font size=4><b><u>�����ŷ����</u></b></font>";
		
		print "<font size=4><table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td><td>����(������) : </td><td align=center><u>&nbsp " .$rowperson['fnameth'];
		print "&nbsp </u></td>";
		print "<td>���ʡ��(������) : </td><td align=center><u>&nbsp " .$rowperson['lnameth'];
		print "&nbsp </u></td></tr>";
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����(�����ѧ���) : </td><td><u> &nbsp " .$rowperson['fnameen'];
		print "&nbsp  </u> </td>";
		print "<td>���ʡ��(�����ѧ���) : </td><td><u> &nbsp " .$rowperson['lnameen'];
		print " &nbsp </u> </td></tr> </table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�� : </td><td><u>&nbsp " .$rowperson['gender'];
		print " &nbsp </u></td> ";
		print "<td>��ʹ� : </td><td><u> &nbsp  " .$rowperson['religion'];
		print " &nbsp </u></td> ";
		print "<td>���� : </td><td><u> &nbsp " .$rowperson['age'];
		print " &nbsp  </u></td><td> </td> ";
		print "<td>�ѹ/��͹/���Դ : </td><td><u> &nbsp " .$rowperson['birthdate']."  &nbsp </u></td></tr></table>";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>���ѧ�֡�������褳� : </td><td><u> &nbsp " .$rowperson['faculty'];
		print "&nbsp </u></td>";
		print "<td>�Ң��Ԫ� : </td><td><u> &nbsp " .$rowperson['major'];
		print "&nbsp </u></td></tr></table> ";

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�дѺ����֡�� : </td><td><u>&nbsp " .$rowperson['degree'];
		print "&nbsp </u></td> ";
		print "<td>��鹻շ�� : </td><td><u> &nbsp " .$rowperson['grade'];
		print " &nbsp </u></td>";
		print "<td>ʶҺѹ����֡�� : </td><td><u> &nbsp " .$rowperson['institution'];
		print "&nbsp </u></td></tr></table> ";
		
//---------------------------------------------address-------------------------------------------------------------------------------------------
$sql="select * from contactinfo where id =".$id;
$result=mysql_query($sql,$link);
$rowcontact=mysql_fetch_array($result);

		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�������������ö�Դ����� : </td> ";
		print "<td>�Ţ��� </td><td><u>&nbsp " .$rowcontact['number'];
		print "&nbsp </u></td>";
		print "<td>������ </td><td><u>&nbsp " .$rowcontact['moo']; 
		print "&nbsp </u></td> ";
		print "<td>��� </td><td><u> &nbsp &nbsp " .$rowcontact['street'];
		print "&nbsp &nbsp </u></td>";
		print "<td>��� </td><td><u> &nbsp &nbsp " .$rowcontact['soi'];
		print "&nbsp &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�ǧ/�Ӻ� </td><td><u> &nbsp " .$rowcontact['tumbol'];
		print "&nbsp </u></td>";
		print "<td>�����/ࢵ </td><td><u> &nbsp " .$rowcontact['aumpher']; 
		print "&nbsp </u></td> ";
		print "<td>�ѧ��Ѵ </td><td><u> &nbsp " .$rowcontact['province'];
		print "&nbsp </u></td>";
		print "<td>������ɳ��� </td><td><u> &nbsp " .$rowcontact['zipcode']." &nbsp </u></td></tr></table>";
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>�������Ѿ����Ͷ�� : </td><td><u> &nbsp " .$rowcontact['mobilephone']." &nbsp </u></td> "; 
		print "<td>�������Ѿ���ҹ : </td><td><u> &nbsp " .$rowcontact['phone']." &nbsp </u></td></tr></table>"; 
		
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>E-Mail : </td><td><u> &nbsp " .$rowcontact['email']." &nbsp </u></td> "; 
		print "<td>�óթء�Թ����ö�Դ������������Ţ���Ѿ�� : </td><td><u> &nbsp " .$rowcontact['emerphone']." &nbsp </u></td></tr></table> "; 

		print "<br>";

//---------------------------------------------��������ö��л��ʺ��ó�----------------------------------------------------------------------
$sql="select * from langskill where id =".$id;
$result=mysql_query($sql,$link);


		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>��������ö��л��ʺ��ó�</u></b>";
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "���ҷ�趹Ѵ����дѺ�ͧ���ҷ�趹Ѵ";

		print "<br><table>";
while($rowskill=mysql_fetch_array($result))
{

		print "<tr><td >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print " <td> ����".$rowskill['lang']." &nbsp </td> <td> �дѺ ";
		print $rowskill['level']."</td></tr>";

}
print "</table><br>";

//----------------------------------------------���˹觫�觻��ʧ��з�---------------------------------------------------------------------
$sql="select * from wantstaff where id =".$id;
$result=mysql_query($sql,$link);
$rowstaff=mysql_fetch_array($result);

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b><u>���͡���˹觧ҹ���ͧ�����Ѥ�</u></b>";
		
		print "<br><form action=pass.php method=post >";

		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " �ѹ�Ѻ��� 1 : Volunteer ";
		print  $rowstaff['first'];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " �ѹ�Ѻ��� 2 : Volunteer ";
		print $rowstaff['second'];
		print "<br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print " �ѹ�Ѻ��� 3 : Volunteer ";
                            print $rowstaff['third'];
		//print "<br>";
		//print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		/*print "<input  type=radio name=staff value='staffother' /> ���˹觷���� <select name = listPositionOther>
      <option value = ''></option>
      <option value = '��Шӡ���'>Volunteer ��Шӡ���</option>
      <option value = '����෤�Ԥ����'>Volunteer ����෤�Ԥ����</option>
      <option value = '����ҹ�ҹ�����'>Volunteer ����ҹ�ҹ��������Ѻ͹ء�����ý��µ�ҧ�</option>
    </select>";*/

		print "<br><br>";


//----------------------------------------�ѹ�Ѻ������͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ���------------------------------------------------

//if($rowstaff['sport']==1){
$sql="select * from sport where id =".$id;
$result=mysql_query($sql,$link);
$rowsport=mysql_fetch_array($result);
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>�������Ъ�Դ���Ңͧ Volunteer ��Шӡ��� <u>�����</u></b><br>";
		print "<table><tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td> �ѹ�Ѻ��� 1 : &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>����� : ".$rowsport['1stcountry'];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>��Դ���� : " .$rowsport['1stsport']."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td> ";
		print "<td> �ѹ�Ѻ��� 2 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����� : " .$rowsport['2ndcountry'];
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>��Դ���� : " .$rowsport['2ndsport']."</td></tr>";
		
		print "<tr><td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td> �ѹ�Ѻ��� 3 : &nbsp &nbsp &nbsp &nbsp</td>";
		print "<td>����� : ".$rowsport['3rdcountry'];
		print "&nbsp&nbsp&nbsp</td>";
		print "<td>��Դ���� : " .$rowsport['3rdsport']."</td></tr></table>";
//}
//else if($rowstaff['sport']==0){
		//print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		//print "<b>���͡�������Ъ�Դ���Ңͧ Volunteer ��Шӡ��� <u>�����</u></b><br>";
		print "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
		print "<b>����Ѻ�Ѵ������Ѥ���ҽ���<input type=text name=staff value=��͹�Ѻ��Шӡ��� > ���͡�������ǡ� ��ҹ</b><br>";
		print "<table><tr><td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
		print "<td>����� : <select name = listCountry>
      <option value = ''></option>
      <option value = '����'>����</option>
      <option value = '����٪�'>����ت�</option>
      <option value = '�Թⴹ����'>�Թⴹ����</option>
      <option value = '���'>���</option>
      <option value = '�������'>�������</option>
      <option value = '����'>����</option>
      <option value = '���ԻԹ��'>���ԻԹ��</option>
      <option value = '�ԧ����'>�ԧ����</option>
      <option value = '��'>��</option>
      <option value = '���´���'>���´���</option>
    </select>";
		print "&nbsp &nbsp &nbsp</td>";
		print "<td>��Դ���� : <select name = listSport>
      <option value = ''></option>
      <option value = '��ձ�'>��ձ�</option>
      <option value = 'Ẵ�Թ�ѹ'>Ẵ�Թ�ѹ</option>
      <option value = '����絺��'>����絺��</option>
      <option value = '��������Ū���Ҵ'>��������Ū���Ҵ</option>
      <option value = '�ص���'>�ص���</option>
      <option value = '�ص���'>�ص���</option>
      <option value = '����'>����</option>
      <option value = '�������'>�������</option>
      <option value = '�ѹ�ѡ���ѵ'>�ѹ�ѡ���ѵ</option>
      <option value = '໵ͧ'>໵ͧ</option>
      <option value = '෤�ѹ�'>෤�ѹ�</option>
      <option value = '����෹���'>����෹���</option>
      <option value = '෹���'>෹���</option>
      <option value = '������'>������</option>
      <option value = 'ૻѡ�С���'>ૻѡ�С���</option>
      <option value = '���¹��'>���¹��</option>
      <option value = '���������'>���������</option>
    </select></td></tr></table>";

	
//}

		print "<input type=hidden name=id value=".$id.">";
		print "<input type=hidden name=sport value=".$rowstaff['sport'].">";
		print "<p><center><input type = submit name=submit style='width:100px; height:50px' value = ��ҹ />";
		print "&nbsp &nbsp <input type = submit name=submit style='width:100px; height:50px' value = ���ͧ />";
		print "&nbsp &nbsp <input type = submit name=submit style='width:100px; height:50px' value = �ѧ���Ԩ�ó� />";
		print "<br><br></center></p></form></font></font>";
?>
</body>
</html>