<?php

namespace T73 Biz LLC\LaravelLibretranslate\Commands;

use Illuminate\Console\Command;

class LaravelLibretranslateCommand extends Command
{
    public $signature = 'laravel-libretranslate';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
