<?php
    namespace Scheduler\Infrastructure\Ram;

    use Scheduler\Worker;

    class RamWorker implements Worker
    {
        public function run()
        {
            return rand(1, 1024);
        }
    }
