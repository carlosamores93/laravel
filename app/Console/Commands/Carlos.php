<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Carlos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Carlos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        //
        for ($i=0; $i < 60; $i++) { 
            $this->info($i);
            sleep(1);
        }
        //
        //
    }
}
