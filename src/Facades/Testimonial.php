<?php

namespace Litecms\Testimonial\Facades;

use Illuminate\Support\Facades\Facade;

class Testimonial extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'litecms.testimonial';
    }
}
