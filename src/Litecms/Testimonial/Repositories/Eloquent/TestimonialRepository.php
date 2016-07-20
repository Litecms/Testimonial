<?php

namespace Litecms\Testimonial\Repositories\Eloquent;

use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TestimonialRepository extends BaseRepository implements TestimonialRepositoryInterface
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name' => 'like',
    ];

    public function boot()
    {
        $this->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'));
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        $this->fieldSearchable = config('package.testimonial.testimonial.search');
        return config('package.testimonial.testimonial.model');
    }

    /**
     * Display  gadget
     *
     * @param int $count
     *
     * @return array
     */
    public function gadget($count)
    {
        return $this->model->orderBy('id', 'DESC')->take($count)->get();
    }
}
