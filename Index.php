<"php.validate.executablePath" = "C:\Users\senob\OneDrive\Documents\Assignments\CSCE489\php-7.1.9-Win32-VC14-x64\php.exe"

<!DOCTYPE html>
<html>
<body>

<?php
    echo "hello world\n";
    echo date('Y-m-d H:i:s');
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Textfile" name="submit">
</form>

</body>
</html>