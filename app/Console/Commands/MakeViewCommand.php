<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class MakeViewCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:view';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new scaffold view';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'View';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = Str::kebab($this->getNameInput());

        if ($this->hasOption('setting')) {
            $view_root_path = resource_path('views/settings');
        } else {
            $view_root_path = resource_path('views/modules');
        }

        $path = $view_root_path . '/' . $name;

        if (! $this->files->isDirectory($view_root_path)) {
            $this->files->makeDirectory($view_root_path, 0777, true, true);
        }

        $this->info('Creating ' . $this->argument('name') . ' scaffold views.');

        if (! file_exists($path)) {
            $this->files->copyDirectory($this->getStub(), $path);
            $this->info($path . ' view created successfully.');
        } else {
            $this->comment($path . ' view already exist.');
        }
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/view';
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['setting', 's', InputOption::VALUE_OPTIONAL, 'Create scaffold config views for a given module'],
        ];
    }
}
