<?php
    namespace Scheduler;

    class WorkerPool
    {
        private $workers;

        public function __construct(array $workers)
        {
            $this->workers = $workers;
        }

        public function assignWork()
        {
            return $this->workers[
                rand(0, count($this->workers) - 1)
            ]->run();
        }
    }
