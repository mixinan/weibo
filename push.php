<?php
	 header("Content-Type: text/html; charset=gbk");
   #1.���ݿ�����
     require("init.php");
	 
   #2.����ǰ�˴��ݹ���������
     $text=$_REQUEST["text"];
	 
	#3.ƴ��slq���
	 $sql="insert into weibo(weibo_text,weibo_create_time) values('$text',now())";
	#4.ִ��sql����ȡ���
	 $result=mysqli_query($conn,$sql);
	#5.���ݽ��������Ӧ
	 if($result==true){
		echo "ok";
	 }else{
	    echo "fail";
	 }
?>