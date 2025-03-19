<?php

namespace DanielHe4rt\FilamentPosthog\Commands;

use Illuminate\Console\Command;

class FilamentPosthogCommand extends Command
{
    public $signature = 'filament-posthog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
