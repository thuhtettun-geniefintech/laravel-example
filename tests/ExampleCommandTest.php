<?php

use Thuhtet\LaravelExample\Commands\LaravelExampleCommand;

use function Pest\Laravel\artisan;

it('can output command from config file', function () {
    artisan(LaravelExampleCommand::class)
    ->expectsOutput(config('example.command_output'));
});


it('can output another command from config file', function () {
    config()->set('example.command_output','another new config values');

    artisan(LaravelExampleCommand::class)
    ->expectsOutput('another new config values');
});
