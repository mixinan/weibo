<?php
	 header("Content-Type: text/html; charset=gbk");
   #1.���ݿ�����
     require("init.php");
	 
   #2.����ǰ�˴��ݹ���������
     $ptext=$_REQUEST["ptext"];
	 $weibo_id=$_REQUEST["weibo_id"];
	 
	#3.ƴ��slq���
	 $sql="insert into wbpinglun(ptext,pcreate_time,weibo_id) values('$ptext',now(),'$weibo_id')";
	
	#4.ִ��sql����ȡ���
	 $result=mysqli_query($conn,$sql);
	
	#5.���ݽ��������Ӧ
	 if($result==true){
		$sql="update weibo set pinglun_num=pinglun_num+1,weibo_last_modify_time=now() where weibo_id='$weibo_id'";
		$result = mysqli_query($conn,$sql);
		if($result==true){
			echo "ok";
		}
	 }else{
	    echo "fail";
	 }
?>