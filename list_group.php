<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<? $group=$_GET['group'];
?>
<title>��ª��ͽ��� <? echo $group; ?></title>
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
</head>

<body>
<div align="center" style="font-size:18px" ><b>���� <? echo $group; ?></b></div><p>
<?
include("connect.php");
$sql="select * from personalinfo p inner join committee c on p.id=c.id where c.staff='".$group."' and c.pass=1 order by p.fnameth";
$result=mysql_query($sql,$link);
$row=mysql_fetch_array($result);
if($row['id']!=NULL){
	print "<table border=1 align=center class=sample><tr><td></td><td><b align=center> ID </b></td>
	<td align=center><b>&nbsp ���� &nbsp</b></td>
	<td align=center><b>&nbsp ���ʡ�� &nbsp</a></b></td>
	<td align=center><b>&nbsp ����Է����� &nbsp</b></td>
	</tr>";
	$i=1;
	do{
		print "<tr><td align=center> &nbsp ".$i." &nbsp </td>
	<td align=center> &nbsp ".$row['id']."  &nbsp </td>
	<td align=center> &nbsp ".$row['fnameth']." &nbsp </td>
	<td align=center> &nbsp ".$row['lnameth']." &nbsp </td>
	<td align=center> &nbsp ".$row['institution']." &nbsp </td>
	</tr>";
	$i++;
	}while($row=mysql_fetch_array($result));
	print "</table>";
}else
	print "<p><div align=center > ��辺������ </div>";
?>
</body>
</html>
