<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Testimonial\Http\Requests\TestimonialUserApiRequest;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Models\Testimonial;

/**
 * User API controller class.
 */
class TestimonialUserApiController extends BaseController
{
    
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'api';
    /**
     * Initialize testimonial controller.
     *
     * @param type TestimonialRepositoryInterface $testimonial
     *
     * @return type
     */
    public function __construct(TestimonialRepositoryInterface $testimonial)
    {
        $this->repository = $testimonial;
        $this->middleware('api');
        $this->middleware('jwt.auth:api');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }

    /**
     * Display a list of testimonial.
     *
     * @return json
     */
    public function index(TestimonialUserApiRequest $request)
    {
        $testimonials = $this->repository
            ->pushCriteria(new \Litecms\Testimonial\Repositories\Criteria\TestimonialUserCriteria())
            ->setPresenter('\\Litecms\\Testimonial\\Repositories\\Presenter\\TestimonialListPresenter')
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->all();
        $testimonials['code'] = 2000;
        return response()->json($testimonials)
            ->setStatusCode(200, 'INDEX_SUCCESS');

    }

    /**
     * Display testimonial.
     *
     * @param Request $request
     * @param Model   Testimonial
     *
     * @return Json
     */
    public function show(TestimonialUserApiRequest $request, Testimonial $testimonial)
    {

        if ($testimonial->exists) {
            $testimonial         = $testimonial->presenter();
            $testimonial['code'] = 2001;
            return response()->json($testimonial)
                ->setStatusCode(200, 'SHOW_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Show the form for creating a new testimonial.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(TestimonialUserApiRequest $request, Testimonial $testimonial)
    {
        $testimonial         = $testimonial->presenter();
        $testimonial['code'] = 2002;
        return response()->json($testimonial)
            ->setStatusCode(200, 'CREATE_SUCCESS');
    }

    /**
     * Create new testimonial.
     *
     * @param Request $request
     *
     * @return json
     */
    public function store(TestimonialUserApiRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.api');
            $testimonial           = $this->repository->create($attributes);
            $testimonial           = $testimonial->presenter();
            $testimonial['code']   = 2004;

            return response()->json($testimonial)
                ->setStatusCode(201, 'STORE_SUCCESS');
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4004,
            ])->setStatusCode(400, 'STORE_ERROR');
        }

    }

    /**
     * Show testimonial for editing.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return json
     */
    public function edit(TestimonialUserApiRequest $request, Testimonial $testimonial)
    {

        if ($testimonial->exists) {
            $testimonial         = $testimonial->presenter();
            $testimonial['code'] = 2003;
            return response()->json($testimonial)
                ->setStatusCode(200, 'EDIT_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Update the testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return json
     */
    public function update(TestimonialUserApiRequest $request, Testimonial $testimonial)
    {
        try {

            $attributes = $request->all();

            $testimonial->update($attributes);
            $testimonial         = $testimonial->presenter();
            $testimonial['code'] = 2005;

            return response()->json($testimonial)
                ->setStatusCode(201, 'UPDATE_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4005,
            ])->setStatusCode(400, 'UPDATE_ERROR');

        }

    }

    /**
     * Remove the testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return json
     */
    public function destroy(TestimonialUserApiRequest $request, Testimonial $testimonial)
    {

        try {

            $t = $testimonial->delete();

            return response()->json([
                'message' => trans('messages.success.delete', ['Module' => trans('testimonial::testimonial.name')]),
                'code'    => 2006,
            ])->setStatusCode(202, 'DESTROY_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4006,
            ])->setStatusCode(400, 'DESTROY_ERROR');
        }

    }

}
