<?php

namespace app\srp\right;

class Logger
{
    public static function registerLog(string $content)
    {
        $filePath = realpath(__DIR__) . '/../../../logs/email-sender.txt';
        $content = date('d/m/Y H:i:s') . "\n" . $content . "\n\n";

        file_put_contents($filePath, $content, FILE_APPEND);
    }
}