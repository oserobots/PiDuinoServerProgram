<!DOCTYPE html>
<html>
<body>

<?php
    echo "Hello CSCE 489!\n";
    echo date('Y-m-d H:i:s');
?>

<form action="Upload.php" method="post" enctype="multipart/form-data">
Select text file to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Textfile" name="submit">
</form>

</body>
</html>
