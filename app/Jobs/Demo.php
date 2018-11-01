<?php

namespace App\Jobs;

use App\Services\LogHelper;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Jobs\DemoTest;

class Demo implements ShouldQueue
{
    /**
     * The number of seconds the job can run before timing out.
     * 超时时间
     * @var int
     */
    public $timeout = 120;

    /**
     * The number of times the job may be attempted.
     * 尝试次数
     * @var int
     */
    public $tries = 5;

    protected $param;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->param = $param;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        LogHelper::logs($this->param, 'Jobs', 'Test', 'queue_jobs_logs');
        DemoTest::dispatch('测试异步操作:步骤3');//异步
    }
}
