

<?php
    // $storagFolder = storage_path('app/public');
    // $linkFolder = $_SERVER['DOCUMENT_ROOT']. '/storage';
    // symlink($storagFolder, $linkFolder);
    

    symlink('/home/tamisemi/ortamisemim-web/storage/app/public', '/home/tamisemi/public_html/ortamisemim-web/storage');
    echo 'success';
?>