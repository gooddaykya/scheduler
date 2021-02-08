<?php
    namespace Scheduler\Infrastructure\File;

    use Psr\Log\AbstractLogger;

    class FileLogger extends AbstractLogger
    {
        private $file;

        public function __construct($path)
        {
            $this->file = $path;
        }

        public function log($level, $message, array $context = [])
        {
            $entry = $this->format($level, $message, $context);
            file_put_contents($this->file, $entry, \FILE_APPEND);
        }

        private function format($level, $message, array $context)
        {
            return sprintf(
                "[%s] %s: %s\n",
                strtoupper($level),
                date('Y-m-d H:i:s'),
                $message
            );
        }
    }
