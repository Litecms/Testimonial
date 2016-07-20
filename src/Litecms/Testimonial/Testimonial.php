<?php

namespace Litecms\Testimonial;

class Testimonial
{
    /**
     * $testimonial object.
     */
    protected $testimonial;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    /**
     * Returns count of testimonial.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count($type)
    {

        $testimonials = $this->$type->all();
        return count($testimonials);
    }

    /**
     * Display  gadget
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return int
     */
    public function gadget($view = 'admin.testimonial.gadget', $count = 10)
    {
        $this->testimonial->pushCriteria(new \Litecms\Testimonial\Repositories\Criteria\TestimonialUserCriteria());
        $testimonials = $this->testimonial->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('testimonial::' . $view, compact('testimonials'))->render();
    }
}
