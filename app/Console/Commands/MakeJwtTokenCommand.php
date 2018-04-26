<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class MakeJwtTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:jwt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new JWT Token';

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
        $key = Str::random(32);

        file_put_contents($this->laravel->environmentFilePath(), preg_replace(
            $this->keyReplacementPattern(),
            'JWT_SECRET=' . $key,
            file_get_contents($this->laravel->environmentFilePath())
        ));

        $this->info("jwt-auth secret [$key] set successfully.");
    }

    /**
     * Get a regex pattern that will match env JWT_SECRET with any random key.
     *
     * @return string
     */
    protected function keyReplacementPattern()
    {
        $escaped = preg_quote('='.$this->laravel['config']['jwt.secret'], '/');

        return "/^JWT_SECRET{$escaped}/m";
    }
}
