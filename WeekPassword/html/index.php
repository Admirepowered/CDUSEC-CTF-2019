<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CDUSEC专用大马</title>
    <style>
        html,body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .content {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body bgcolor="black">
<div class="content">
    <font size="5" color="#f0ffff">CDUSEC专用WEBSHELL</font>
    <br>
    <form action="index.php" method="post">
        <input name="password" type="password" style="border:1px solid #808080; width:400px; line-height:20px; padding:9px 5px; display:block; float:left;" />
        <input type="submit" style="width:100px; line-height:40px; background-color:#808080; border:none; display:block; float:left; color:#000000;" value="Enter" />
    </form>
</div>
</body>
</html>
<?php
if($_POST['password'] != '') {
    if($_POST['password'] === '000000') {
        print("<script>alert('flag{Fine_WeBsH3ll}')</script>");
    }
    else {
        print("<script>alert('不是你的马，你就不要骑')</script>");
    }
}