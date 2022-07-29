<?php
namespace Mypackages\Samplepackage\Providers;
use Illuminate\Support\ServiceProvider;
class SamplepackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../Resources/views', 'samplepackage');
    }
    public function register()
    {
    }
}

