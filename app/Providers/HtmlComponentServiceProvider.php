<?php

namespace App\Providers;

use Collective\Html\FormFacade;
use Illuminate\Support\ServiceProvider;

class HtmlComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        FormFacade::component('bootstrapText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        FormFacade::component('bootstrapTextarea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        FormFacade::component('bootstrapDate', 'components.form.date', ['name', 'value' => null, 'attributes' => []]);
        FormFacade::component('bootstrapSelect', 'components.form.select', ['name', 'options' => [], 'value' => null, 'attributes' => []]);
        FormFacade::component('bootstrapSelectMulti', 'components.form.select-multi', ['name', 'options' => [], 'value' => null, 'attributes' => []]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
