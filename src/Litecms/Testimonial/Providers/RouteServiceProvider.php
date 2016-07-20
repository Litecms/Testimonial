<?php

namespace Litecms\Testimonial\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Litecms\Testimonial\Models\Testimonial;
use Request;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Litecms\Testimonial\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        if (Request::is('*/testimonial/testimonial/*')) {
            $router->bind('testimonial', function ($id) {
                $testimonial = $this->app->make('\Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface');
                return $testimonial->findorNew($id);
            });
        }

    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require __DIR__ . '/../Http/routes.php';
        });
    }

}
