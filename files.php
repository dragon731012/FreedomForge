<?php
    $dir='/files';
    $files = scandir($dir);
    echo json_encode($files);
?>
