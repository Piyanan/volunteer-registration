<?
function xlsBOF() {
    echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);  
    return;
}

function xlsEOF() {
    echo pack("ss", 0x0A, 0x00);
    return;
}

function xlsWriteNumber($Row, $Col, $Value) {
    echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
    echo pack("d", $Value);
    return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
    $L = strlen($Value);
    echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
    echo $Value;
return;
}

include("connect.php");
// �ç����� sql statement 㹡�ô֧�������Ҩҡ�ҹ������
//$sql="select * from personalinfo p inner join unconfirm u on p.id=u.id where u.id in (select id from committee where pass is null)";
$sql="select * from personalinfo  where id in (select id from committee where pass is null) order by fnameth";
$result=mysql_query($sql,$link);

    // ������������������ҡ��� Header ��¤�Ѻ
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");;
    header("Content-Disposition: attachment;filename=interview_test.xls "); // ���ǹ���������
    header("Content-Transfer-Encoding: binary ");

    // ����ҡ��ͧ������ͧ�Ф�Ѻ�������͸Ժ����� ��ͧ�� sense ˹��� �� ��

                xlsBOF();
                xlsWriteLabel(1,1,"��ª��͹ѡ�֡�ҷ�����Է���Ѵ���͡������Ѥ� ");
                xlsWriteLabel(3,1,"����");
                xlsWriteLabel(3,2,"���ʡ��");
				xlsWriteLabel(3,3,"����Է�����");
				//xlsWriteLabel(3,4,"�ѹ���");
				//xlsWriteLabel(3,5,"����");
				//xlsWriteLabel(3,6,"ʶҹ���");
                $xlsRow = 4;
                while($row=mysql_fetch_array($result)) {
                    ++$i;
                          xlsWriteNumber($xlsRow,0,"$i");
                          xlsWriteLabel($xlsRow,1,$row['fnameth']);
                          xlsWriteLabel($xlsRow,2,$row['lnameth']);
                          xlsWriteLabel($xlsRow,3,$row['institution']);
                          //xlsWriteLabel($xlsRow,4,$row['date']);
						  //xlsWriteLabel($xlsRow,5,$row['time']);
						  //xlsWriteLabel($xlsRow,6,$row['place']);
                    $xlsRow++;
                    }
                     xlsEOF();
                 exit();
?> 