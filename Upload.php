<?php
$target_dir = "/awesome/q/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$textFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$files_q = scandir($target_dir);
$lastIndex = count($files_q) - 2; //because php add one?
echo "[ ] There  are $lastIndex jobs in the queue. ";
$nextNum = 0; //initialize
if ($lastIndex < 1){
	$nextNum = 1; //no jobs
}else{
	$lastFile = $files_q[$lastIndex];
	$lastNum = intval(substr($lastFile, 0, 3)); 
	$nextNum = $lastNum + 1;
}
$nextFile = "$nextNum.txt";
if ($nextNum < 10){
	$nextFile = "0$nextFile";
	if ($nextNum < 100){
		$nextFile = "0$nextFile";
	}
}
if ($nextNum > 999){
	$nextNum = 0; //wrap back to 0
}
echo "[ ] File to be saved as job #$nextNum \n";
$target_file = $target_dir . $nextFile;


// Check if text file is a actual text or fake text file
if(isset($_POST["submit"])) {
    $check = gettext($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "[ ] File is text.\n";
        $uploadOk = 1;
    } else {
        echo "[ ] File is not text.\n";
        $uploadOk = 0;
    }
}
// Check if file exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.\n";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.\n";
    $uploadOk = 0;
}
// Allow certain file formats
if($textFileType != "txt" && $textFileType != "sh" && $textFileType != "doc" ) {
    echo "Sorry, only txt, doc & sh files are allowed.\n";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.\n";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "[+] The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.\n";
    } else {
        echo "[-] Sorry, there was an error uploading your file.\n";
    }
}
?>