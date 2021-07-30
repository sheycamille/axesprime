<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class AutoTopup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:topup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is used to credit ROI to users on specific time and dates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return;
    }
}