<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\TestCrond::class,
        Commands\TestCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
        ->cron('* * * * *');在自定义Cron调度上运行任务
        ->everyMinute();每分钟运行一次任务
        ->everyFiveMinutes();每五分钟运行一次任务
        ->everyTenMinutes();每十分钟运行一次任务
        ->everyThirtyMinutes();每三十分钟运行一次任务
        ->hourly();每小时运行一次任务
        ->daily();每天凌晨零点运行任务
        ->dailyAt('13:00');每天13:00运行任务
        ->twiceDaily(1, 13);每天1:00 & 13:00运行任务
        ->weekly();每周运行一次任务
        ->monthly();每月运行一次任务
        ->monthlyOn(4, '15:00');每月4号15:00运行一次任务
        ->quarterly();每个季度运行一次
        ->yearly();每年运行一次
        ->timezone('America/New_York');	设置时区
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('test')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
