<?php

namespace App\Jobs;

use Illuminate\Contracts\Broadcasting\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class TJob implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public function __construct(
        public string $user,
        public string $age,
    ) {}

    public function handle(): void
    {
        Log::alert('Running the job '.$this->user.' -  '.self::class);

        echo 'Running the Job in queue!';
    }
}
