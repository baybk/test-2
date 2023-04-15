<?php

namespace App\Packages\Papagroup\L8core\Src;

use Illuminate\Support\ServiceProvider;
use App\Packages\Papagroup\L8core\Src\Commands\MakeAction;
use App\Packages\Papagroup\L8core\Src\Commands\MakeRepository;
use App\Packages\Papagroup\L8core\Src\Commands\MakeService;
use App\Packages\Papagroup\L8core\Src\Commands\MakeFilter;
use App\Packages\Papagroup\L8core\Src\Commands\MakeCriteria;
use App\Packages\Papagroup\L8core\Src\Commands\MakeTask;

class L8CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepository::class,
                MakeService::class,
                MakeFilter::class,
                MakeCriteria::class,
                MakeAction::class,
                MakeTask::class
            ]);
        }
    }
}
