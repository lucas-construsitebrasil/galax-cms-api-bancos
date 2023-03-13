<?php

namespace App\Lib\Log;

use App\Lib\Log\Exceptions\InvalidMethodLog;
use Illuminate\Support\Facades\Log as LogProvider;

class Log
{
    private array $availableMethods = [
        'emergency', 'alert', 'critical', 'error', 'warning', 'notice', 'info', 'debug'
    ];

    private LogProvider $logProvider;

    public function __construct()
    {
        $this->logProvider = new LogProvider();
    }

    public function __call(string $methodLog, array $arguments): void
    {
        if (!in_array($methodLog, $this->availableMethods)) {
            throw new InvalidMethodLog();
        }
        $this->generateLog($methodLog, $arguments[0]);
    }

    private function generateLog(string $typeLog, mixed $message): void
    {
        LogProvider::$typeLog($message);
        if (is_array($message)) {
            $message = implode(', ', $message);
            \ConstrusiteLogger::insertGeneral($typeLog, $message);
        }
    }
}
