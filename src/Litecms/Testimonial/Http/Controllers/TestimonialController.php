<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;

class TestimonialController extends BaseController
{
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
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
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
        $testimonials = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('date','DESC');
        })->paginate();

        return $this->theme->of('testimonial::public.testimonial.index', compact('testimonials'))->render();
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
        $testimonial = $this->repository->scopeQuery(function ($query) use ($slug) {
            return $query->orderBy('id', 'DESC')
                ->where('slug', $slug);
        })->first(['*']);

        return $this->theme->of('testimonial::public.testimonial.show', compact('testimonial'))->render();
    }

    /**
     * Show testimonials.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function testimonials()
    {
        $testimonials = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC');
        })->paginate();

        return $this->theme->of('testimonial::public.testimonial.testimonial', compact('testimonials'))->render();
    }

}
