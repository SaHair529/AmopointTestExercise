<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/scripts_loader.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ResponseCreator::wrongMethod();
    return;
}

if (!isset($_FILES['upload_file'])) {
    ResponseCreator::requestWithoutFile();
    return;
}

$fileLoader = new FileLoader();
$uploadSuccess = $fileLoader->uploadFile($_FILES['upload_file']);

if (!$uploadSuccess) {
    ResponseCreator::uploadFailed();
    return;
}

ResponseCreator::ok();