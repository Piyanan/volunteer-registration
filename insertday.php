<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>��С�������к��ѹ ���� ���ʶҹ��� ����Ѻ������Է��������ɳ� </title>
<style type="text/css">
a { text-decoration:none }

table.sample {
	border-width: 1px;
	border-spacing: 0px;
	border-style: outset;
	border-color: gray;
	border-collapse: collapse;
	background-color: white;
}
table.sample th {
	border-width: 1px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
table.sample td {
	border-width: 1px;
	padding: 1px;
	border-style: inset;
	border-color: gray;
	background-color: white;
	-moz-border-radius: 0px 0px 0px 0px;
}
</style>
<SCRIPT LANGUAGE="JavaScript">
<!--

<!-- Begin
function CheckAll(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = true ;
}

function UnCheckAll(chk)
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
}
// End -->
</script>
</head>


<body>

<?
include("connect.php");
$order=$_GET['orderby'];
if($order==NULL)
	$order='fnameth';
?>

<p>
<p>
<p>
<table align="center" class="sample"><tr><td>
<a href=committee.php> &nbsp ��͡ ���� &nbsp </a></td>
<td><a href=insertday.php> &nbsp ��͡ �ѹ�����ɳ� &nbsp </a></td>
</tr></table><p>
<form action="confirmday.php" method="post" name="formA" >
<center><b>�ô�к��ѹ ���� ���ʶҹ��� ����Ѻ��������ɳ�</b><p>
�ѹ��� &nbsp;
    	<select name = "listDay">
		  <option value = " "> </option>
    	  <option value = "06">06</option>
    	  <option value = "07">07</option>
  	  </select> &nbsp; &nbsp;
       ��͹ ��Ȩԡ�¹ &nbsp;
       2553
       
       &nbsp; &nbsp; ���� &nbsp;<input type="text" name = "listtime">
      
       &nbsp; &nbsp; ʶҹ��� &nbsp; <input type="text" name="place" />
	   </center>
<?
$sql="select * from personalinfo where id in (
select id from committee where pass is null) order by ".$order;
$result=mysql_query($sql,$link);

print "<table border=1 align=center class=sample><tr>
<td align=center><b><input type=button name=Check_All value='check all' onClick='CheckAll(document.formA.checkboxA[])'>
<input type=button name=Un_CheckAll value='uncheck' onClick='UnCheckAll(document.formA.checkboxA[])'></b></td>
<td align=center><b><a href=\"insertday.php?orderby=fnameth\">&nbsp ����(������) &nbsp</a></b></td>
<td align=center><b><a href=\"insertday.php?orderby=lnameth\">&nbsp ���ʡ��(������) &nbsp</a></b></td>
"//<td align=center><b><a href=\"committee.php?orderby=p.age\">&nbsp ���� &nbsp</a></b></td>
."<td align=center><b><a href=\"insertday.php?orderby=institution\">&nbsp ����Է����� &nbsp</a></b></td>
<td align=center><b>&nbsp �ѹ��� &nbsp</b></td>
<td align=center><b>&nbsp ���� &nbsp</b></td>
<td align=center><b>&nbsp ʶҹ��� &nbsp</b></td>

</tr>";

  
while($row=mysql_fetch_array($result))
{
$sql="select * from unconfirm where id =".$row['id'];
$result_unconfirm=mysql_query($sql,$link);
$row_unconfirm=mysql_fetch_array($result_unconfirm);

print "<tr>
 <td align=center> <input type=checkbox name=checkboxA[".$row['id']."] value=true /></td>
  
<td align=center>".$row['fnameth']."</td>
<td align=center>".$row['lnameth']."</td>
"//<td align=center>".$row['age']."</td>
."<td align=center>".$row['institution']."</td>";

print "<td align=center>".$row_unconfirm['date'];
print "</td>";

print "<td align=center>".$row_unconfirm['time'];
print "</td>";

print "<td align=center>".$row_unconfirm['place'];
print "</td>";

}
print "</table>";
	?>
    <p><center>
	<p><b>�ô��Ǩ�ҹ�����š�͹�ӡ�úѹ�֡</b><br />
	  <br>
	  <input type = "submit" name = "submit" value = "�ѹ�֡" />
	  </p>
  </center>
</form>


</body>
</html>
