<?php
$html = 'PCFET0NUWVBFIGh0bWw+PGh0bWwgbGFuZz0iZW4iPjxoZWFkPjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtVHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij48dGl0bGU+TG9naW48L3RpdGxlPjxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJMb2dpbiI+PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLi9Mb2dpbl9maWxlcy9zdHlsZS5jc3MiPjwvaGVhZD48Ym9keT48Zm9ybSBtZXRob2Q9InBvc3QiIGFjdGlvbj0iaW5kZXgucGhwIiBpZD0ic2xpY2stbG9naW4iPjxoMSBzdHlsZT0iZm9udC1zaXplOjM0cHg7dGV4dC1hbGlnbjpjZW50ZXI7Y29sb3I6I2ZmZjsiPkhhY2tlclpvbmU8L2gxPjxicj48YnI+PGxhYmVsIGZvcj0idXNlcm5hbWUiPnVzZXJuYW1lPC9sYWJlbD48aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0idXNlcm5hbWUiIGNsYXNzPSJwbGFjZWhvbGRlciIgcGxhY2Vob2xkZXI9InVzZXJuYW1lIj48bGFiZWwgZm9yPSJwYXNzd29yZCI+cGFzc3dvcmQ8L2xhYmVsPjxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icGFzc3dvcmQiIGNsYXNzPSJwbGFjZWhvbGRlciIgcGxhY2Vob2xkZXI9InBhc3N3b3JkIj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iTG9naW4iPjwvZm9ybT48L2JvZHk+PC9odG1sPg==';
echo base64_decode($html);

$con = mysql_connect("localhost:3306","dog","123456");
if(!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("mydb", $con);
$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] != ''){
	
	$sql = "select id from users where username = '".$username."' and password = '".$password."';";
	$res = mysql_query($sql,$con);
	$row = mysql_fetch_array($res);	
	
	if($row){
		echo "<script>alert(\"Login Success!\")</script>";
	}
	else{
		echo "<script>alert(\"Login Fail!\")</script>";
	}
}