<?php

if(empty($_POST['filename']) || empty($_POST['content'])){
	exit;
}

/*write to file action*/
$content = $_POST['content'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/downloadFile/js/myText.txt","wb");
fwrite($fp,$content);
fclose($fp);

/* disable download action
$filename = preg_replace('/[^a-z0-9\-\_\.]/i','',$_POST['filename']);

header("Cache-Control: ");
header("Content-type: text/plain");
header('Content-Disposition: attachment; filename="'.$filename.'"');

echo $_POST['content'];
*/
?>