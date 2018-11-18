<?php
if(isset($_GET["d"])){
    $name = urldecode($_GET["d"]);
    $filepath = $name . '.ovpn';
    
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush();
        readfile($filepath);
        exit;
    } else {
    	echo 'This certificate does not exist <br> <a href="../index.php">Go back</a>';
    }
}
?>
