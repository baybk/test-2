<?php

namespace App\Packages\Papagroup\L8core\Src\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeTask extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:task {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new task';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Task';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/Task.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
