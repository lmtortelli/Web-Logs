<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Domain\File\FileReader;
use App\Domain\File\Format\JsonFileFormat;


class Logs extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'logs {path}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Load File log';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Create a File parser
        $fileReader = new FileReader(new JsonFileFormat());
        
        // Get path of arguments
        $filePath = $this->argument('path');

        // Parse log's file on Json Format 
        $this->info($fileReader->parse($filePath));
        
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
