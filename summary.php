<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>15th Asean University Thailand </title>
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
<?
include("connect.php");
?>
<p><p><p>
<table align="center" class="sample"><tr><td>
<a href=committee.php> &nbsp ��͡ ���� &nbsp </a></td>

</tr></table><p>
<p align="center"><b>��ػ�ӹǹ�����Ѥ�</b></p>
<table align="center">
<?
//----------------------------------�����Ѥ÷�����-------------------------------------
$sql="select count(id) as countid from personalinfo";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
$count['countid']-=1;
print "<tr><td> �ӹǹ�����Ѥ÷����� </td><td align=center>".$count['countid']." ��</td></tr>";
print "<tr><td>----------------------------------------------</td></tr>";

$sql="select count(id) as counttech from wantstaff where first='����෤�Ԥ����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> �ӹǹ�����Ѥý���෤�Ԥ���� </td><td align=center>".$count['counttech']." ��</td></tr>";

$sql="select count(id) as countgeneral from wantstaff where first='����ҹ�ҹ�����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> �ӹǹ�����Ѥû���ҹ�ҹ����� </td><td align=center>".$count['countgeneral']." ��</td></tr>";

$sql="select count(id) as countsport from wantstaff where first='��Шӡ���'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> �ӹǹ�����Ѥû�Шӡ��� </td><td align=center>".$count['countsport']." ��</td></tr>";

print "</table><br><br><table align=center>";
//----------------------------------������ҹ-------------------------------------
$sql="select count(id) as countid from committee where pass=1";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td> �ӹǹ������ҹ��äѴ���͡������ </td><td align=center>".$count['countid']." ��</td></tr>";
print "<tr><td>----------------------------------------------</td></tr>";

$sql="select count(id) as countvol from committee where staff='෤��������ʹ��'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=෤��������ʹ��\"> �ӹǹ������Ѥý���෤��������ʹ��</a></td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='���ѡ��������'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=���ѡ��������\"> �ӹǹ������Ѥý��·��ѡ�������� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='�Ѵ����觢ѹ��ձ�'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=�Ѵ����觢ѹ��ձ�\"> �ӹǹ������Ѥý��¨Ѵ����觢ѹ��ձ� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='��������Ū���Ҵ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=��������Ū���Ҵ\"> �ӹǹ������Ѥý�����������Ū���Ҵ </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='�Ѵ����觢ѹ�ص���'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=�Ѵ����觢ѹ�ص���\"> �ӹǹ������Ѥý��¨Ѵ����觢ѹ�ص��� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='�Ѵ����觢ѹ����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=�Ѵ����觢ѹ����\"> �ӹǹ������Ѥý��¨Ѵ����觢ѹ���� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='�������'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=������ �\"> �ӹǹ������Ѥý��¤������ </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='ૻѡ�С���'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ૻѡ�С���\"> �ӹǹ������Ѥý���ૻѡ�С��� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='���¹��'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=���¹��\"> �ӹǹ������Ѥý������¹�� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='෤�ѹ�'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=෤�ѹ�\"> �ӹǹ������Ѥý���෤�ѹ� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='����෹���'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=����෹���\"> �ӹǹ������Ѥý�������෹��� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='���������'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=���������\"> �ӹǹ������Ѥý������������ </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='໵ͧ'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=໵ͧ\"> �ӹǹ������Ѥý���໵ͧ </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='�ص���'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=�ص���\"> �ӹǹ������Ѥý��¿ص��� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='��ձ�'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=��ձ�\"> �ӹǹ������Ѥý��¡�ձ� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='��Ш����˹�ҹѡ����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=��Ш����˹�ҹѡ����\"> �ӹǹ������Ѥý��»�Ш����˹�ҹѡ���� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='������Ѥ�'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=������Ѥ�\"> �ӹǹ������Ѥý���������Ѥ� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='������Ѥ�(�֡ͺ��)'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=������Ѥ�(�֡ͺ��)\"> �ӹǹ������Ѥý���������Ѥ�(�֡ͺ��) </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=����\"> �ӹǹ������Ѥý��¢��� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='��ͧ�����'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=��ͧ�����\"> �ӹǹ������Ѥý��·�ͧ����� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='ʹ������ػ�ó�'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=ʹ������ػ�ó�\"> �ӹǹ������Ѥý���ʹ������ػ�ó� </td><td align=center>".$count['countvol']." ��</td></tr>";

$sql="select count(id) as countvol from committee where staff='������Ѥ�(���ʹ��)'";
$result=mysql_query($sql,$link);
$count=mysql_fetch_array($result);
print "<tr><td><a href=\"list_group.php?group=������Ѥ�(���ʹ��)\"> �ӹǹ������Ѥý���������Ѥ�(���ʹ��) </td><td align=center>".$count['countvol']." ��</td></tr>";
?>
</table>
</body>
</html>
