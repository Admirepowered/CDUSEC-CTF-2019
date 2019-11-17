<html>
<body>
./flag.php
<form action="index.php" method="post"
      enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>
<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
else
{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	$filename = str_replace(".", "", $_FILES["file"]["name"]);
    if (file_exists("upload/" . $filename))
    {
        echo $filename . " already exists. ";
    }
    else
    {
        move_uploaded_file($filename, "upload/" . $filename);
        echo "Stored in: " . "upload/" . $filename;
        system('php delete.php');
    }
}
?>
