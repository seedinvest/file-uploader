<?php
// This file can be placed on any PHP-enabled server (not Github) to demo the uploading
// File is simply discarded, not saved, and always returns success: true

header('Access-Control-Allow-Headers: origin, x-mime-type, x-requested-with, x-file-name, content-type');
header('Access-Control-Allow-Origin: *');
echo '{success:true}';

/***
exit;

// list of valid extensions, ex. array("jpeg", "xml", "bmp")
$allowedExtensions = array();
// max file size in bytes
$sizeLimit = 10 * 1024 * 1024;

// include('UploaderClass.php');
$uploader = new qqFileUploader($allowedExtensions, $sizeLimit);

// Call handleUpload() with the name of the folder, relative to PHP's getcwd()
// $result = $uploader->handleUpload('uploads/');

// to pass data through iframe you will need to encode all html tags
echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
***/