<?php

namespace Litecms\Testimonial;

use User;

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
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.testimonial.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->testimonial->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\TestimonialUserCriteria());
        }

        $testimonial = $this->testimonial->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('testimonial::' . $view, compact('testimonial'))->render();
    }
}
