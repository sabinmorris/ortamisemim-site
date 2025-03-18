

<?php
    $storagFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT']. '/storage';
    symlink($storagFolder, $linkFolder);
    echo 'success';

?>