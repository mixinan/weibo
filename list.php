<?php
   #���ӣ���Ӧ��Ϣͷ
   header("Content-Type:application/json");
     #1.���ݿ�����
	 require("init.php"); 
	 #2.ƴsql���
	 $sql="select * from weibo order by weibo_last_modify_time desc";
	 #3.ִ�в�ѯ�����õ����
     $result=mysqli_query($conn,$sql);
	 #4.����ѯ���ת��Ϊ��������
	 $array=mysqli_fetch_all($result,MYSQLI_ASSOC);
     #var_dump($array);
	 #5.����������ת��ΪJSON��ʽ����Ӧ
	 echo json_encode($array);

?>