
Route::get('/storage-link', function(){
    $storagFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT']. '/storage';
    symlink($storagFolder, $linkFolder);
});