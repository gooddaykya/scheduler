<?php
    namespace Scheduler;

    use Psr\Log\LoggerInterface;

    class Scheduler
    {
        private $pool;
        private $logger;

        public function __construct(
            WorkerPool $workerPool,
            LoggerInterface $logger
        )
        {
            $this->pool = $workerPool;
            $this->logger = $logger;
        }

        public function schedule()
        {
            $result = $this->pool->assignWork();
            $this->logger->info("task finished $result");
            return $result;
        }
    }
