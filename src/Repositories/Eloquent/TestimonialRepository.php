<?php

namespace Litecms\Testimonial\Repositories\Eloquent;

use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.testimonial.testimonial.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.testimonial.testimonial.model.model');
    }
}
