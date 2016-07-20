<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Repositories\Presenter\TestimonialItemTransformer;

/**
 * Pubic API controller class.
 */
class TestimonialApiController extends BaseController
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
        $this->middleware('api');
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
            ->setPresenter('\\Litecms\\Testimonial\\Repositories\\Presenter\\TestimonialListPresenter')
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->paginate();

        $testimonials['code'] = 2000;
        return response()->json($testimonials)
            ->setStatusCode(200, 'INDEX_SUCCESS');
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
        $testimonial = $this->repository
            ->scopeQuery(function ($query) use ($slug) {
                return $query->orderBy('id', 'DESC')
                    ->where('slug', $slug);
            })->first(['*']);

        if (!is_null($testimonial)) {
            $testimonial         = $this->itemPresenter($module, new TestimonialItemTransformer);
            $testimonial['code'] = 2001;
            return response()->json($testimonial)
                ->setStatusCode(200, 'SHOW_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

}
