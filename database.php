<?php
	//����һ�����ݿ�ȫ�ֱ���
	global $db;
	//�����ݿ�
	$db = new mysqli("localhost","root","","PHPMysqlTravelSystem");
	if (mysqli_connect_errno())
	{
		printf("Database Connect Failed. Error: %s\n",mysqli_connect_error());
		exit();
	}
?>