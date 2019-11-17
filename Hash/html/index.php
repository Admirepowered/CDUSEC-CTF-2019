
<!DOCTYPE html>
<html>
<head>
<title>hash_length</title>
<style type="text/css">
	body {
		background:gray;
		text-align:center;
	}
</style>
</head>

<body>
	<h3>Only Admin can see the flag!!</h3>	
	<!--hint.php-->
</body>
</html>




<?php 
error_reporting(0);
function ctt($key)
{
	$t="";
	for($i=0;$i<strlen($key);++$i)
	{
		$t.=chr(ord($key[$i])^$i);
	}
	
	return $t;
}
            $auth = false;
            $role1 = "adminadmin";
            $salt = "1234567890";
            if (isset($_COOKIE["role_true"])) {
                $hsh = $_COOKIE["hsh"];
                if ($_COOKIE["role_true"] === $role1 && $hsh === md5($salt.urldecode($_COOKIE["role"]))) {
                    $auth = true;
                } else {
                    $auth = false;
                }
            } else {
                $s =$role1;
                setcookie('role',ctt(base64_encode($s)));
				
                $hsh = md5($salt.ctt(base64_encode($s)));
                setcookie('hsh',$hsh);
            }
            if ($auth) {
                echo "<h3>Welcome Admin. Your flag is flag{hash_and_php_are_very_good!!!}";
            } else {
                echo "<h3>Only True Admin can see the flag!!</h3>";
            }
?>
