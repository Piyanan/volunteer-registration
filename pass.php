<?
include("connect.php");

$id=$_POST['id'];
$havesport=$_POST['sport'];

//-----------------------��ҹ-------------------------------------
if($_POST['submit']=="��ҹ")
{
	$staff=$_POST['staff'];
	$country=$_POST['listCountry'];
	$sport=$_POST['listSport'];
/*if($_POST['staff']=='staffother'){ //���͡�ѹ��蹷������Ѥ�����ͧ���
	$staff=$_POST['listPositionOther'];
}else $staff=$_POST['staff'];
*/
$sql="update committee set pass=1,staff='$staff',country='$country',sport='$sport' where id=".$id;// add ���˹�
if (!mysql_query($sql,$link))
{
	die('Error pass: ' . mysql_error());
 }
else echo "pass 1 record added ".$staff;

/*if($staff=="��Шӡ���"){
	if($havesport==1){
		if($_POST['sportslec']==1){
			$sql="select 1stcountry,1stsport from sport where id=".$id;
			$result=mysql_query($sql,$link);
			$row=mysql_fetch_array($result);
			$country=$row['1stcountry'];
			$sport=$row['1stsport'];
		}else
		if($_POST['sportslec']==2){
			$sql="select 2ndcountry,2ndsport from sport where id=".$id;
			$result=mysql_query($sql,$link);
			$row=mysql_fetch_array($result);
			$country=$row['2ndcountry'];
			$sport=$row['2ndsport'];
		}else
		if($_POST['sportslec']==3){
			$sql="select 3rdcountry,3rdsport from sport where id=".$id;
			$result=mysql_query($sql,$link);
			$row=mysql_fetch_array($result);
			$country=$row['3rdcountry'];
			$sport=$row['3rdsport'];
		}
}
else if($havesport==0){
	$country=$_POST['listCountry'];
	$sport=$_POST['listSport'];
}

	$sql="update committee set sport='$sport',country='$country' where id=".$id; // add ������л����
	if (!mysql_query($sql,$link))
{
	die('Error pass: ' . mysql_error());
 }
else echo "pass sport 1 record added";
}*/

}
//-----------------------���ͧ-------------------------------------
else if($_POST['submit']=="���ͧ")
{
$sql="update committee set pass=0,staff='',country='',sport='' where id=".$id;

if (!mysql_query($sql,$link))
{
	die('Error fail: ' . mysql_error());
 }
else echo "fail 1 record added";
}

//-----------------------�ѧ���Ԩ�ó�-------------------------------------
else if($_POST['submit']=="�ѧ���Ԩ�ó�")
{
$sql="update committee set pass = NULL,staff='',country='',sport='' where id=".$id;

if (!mysql_query($sql,$link))
{
	die('Error : dont do it' . mysql_error());
 }
else echo "dont do it 1 record added";
}


print " <meta http-equiv='refresh' content='0;URL=committee.php' /> ";

?>

