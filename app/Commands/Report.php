<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Services\ServiceLogs;
use App\Services\ServiceLatencie;
use App\Services\ServiceLogRoutes;
use App\Domain\File\FileWriter;
use App\Domain\File\Format\CsvFormatWrite;

class Report extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'report {--console}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $countByConsumer = json_decode(json_encode((new ServiceLogs())->getCountByColumn('authenticated_entity')), true);
        $countByService = json_decode(json_encode((new ServiceLogRoutes())->getCountByColumn('idRoute')), true);
        $averageLatencies = json_decode(json_encode((new ServiceLatencie())->getAverageLatencies()), true);
        if($this->option('console')){    
            $this->info ("Quantidade de Requisições por Consumidor omitida por quantidade de registros >1000");
            print_r ($countByService);
            print_r ($averageLatencies);
        } else {
            
            $fileWrite = new FileWriter(new CsvFormatWrite());
            $fileWrite->write($countByConsumer,'requestByConsumer');
            $fileWrite->write($countByService,'requestByService');
            $fileWrite->write($averageLatencies,'avarageLatencies');
        }
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
