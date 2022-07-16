<?php

namespace Thuhtet\LaravelExample\Commands;

use Illuminate\Console\Command;

class LaravelExampleCommand extends Command
{
    public $signature = 'laravel-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment(config('example.command_output'));

        return self::SUCCESS;
    }
}
