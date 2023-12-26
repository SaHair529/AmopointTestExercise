<?php

class FileLoader
{
    private const FILES_DIR = __DIR__.'/../files';

    public function __construct()
    {
        if (!file_exists(self::FILES_DIR))
            mkdir(self::FILES_DIR);
    }

    public function uploadFile($file): bool
    {
        $filePath = self::FILES_DIR.'/'.basename($file['name']);
        return move_uploaded_file($file['tmp_name'], $filePath);
    }
}