<?php

$targetPath = "uploadedFiles/";
$targetPath = $targetPath . basename($_FILES['uploadedfile']['name']);

error_log("upload file >>" . $targetPath . $_FILES['error'] . "\r\n", 3, "error.log");
error_log("upload file >>". basename($_FILES['uploadedfile']['name']). " \r\n", 3 , "error.log");

if (moveUploadedFile($_FILES['uploadedfile']['tmp_name'], $targetPath)) {
	echo "file " . base($_FILES['uploadedfile']['name']). "sucessfully uploaded";
} else {
	echo "error!";
}

?>
