<?php

class ResponseCreator
{
    public static function wrongMethod()
    {
        header('Content-Type: application/json');
        http_response_code(405);
        echo json_encode([
            'message' => 'Неподдерживаемый метод http запроса'
        ], JSON_UNESCAPED_UNICODE);
    }

    public static function requestWithoutFile()
    {
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode([
            'message' => 'В запросе не указан файл'
        ], JSON_UNESCAPED_UNICODE);
    }

    public static function uploadFailed()
    {
        header('Content-Type: application/json');
        http_response_code(500);
        echo json_encode([
            'message' => 'Ошибка загрузки файла'
        ], JSON_UNESCAPED_UNICODE);
    }

    public static function ok()
    {
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode([
            'message' => 'ok'
        ], JSON_UNESCAPED_UNICODE);
    }
}