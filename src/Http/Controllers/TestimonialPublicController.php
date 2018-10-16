<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;

class TestimonialPublicController extends BaseController
{
    // use TestimonialWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface $testimonial
     *
     * @return type
     */
    public function __construct(TestimonialRepositoryInterface $testimonial)
    {
        $this->repository = $testimonial;
        parent::__construct();
    }

    /**
     * Show testimonial's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {

        $testimonials = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();

        return $this->response->setMetaTitle(trans('testimonial::testimonial.names'))
            ->view('testimonial::testimonial.index')
            ->data(compact('testimonials'))
            ->output();
    }

    /**
     * Show testimonial's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $testimonials = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('testimonial::testimonial.names'))
            ->view('testimonial::testimonial.index')
            ->data(compact('testimonials'))
            ->output();
    }

    /**
     * Show testimonial.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $testimonial = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($testimonial->name . trans('testimonial::testimonial.name'))
            ->view('testimonial::testimonial.show')
            ->data(compact('testimonial'))
            ->output();
    }

}
