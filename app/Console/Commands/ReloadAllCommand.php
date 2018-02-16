<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ReloadAllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reload:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reload all caches and database.';

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
        $this->call('reload:cache');
        $this->call('reload:db');
    }
}
