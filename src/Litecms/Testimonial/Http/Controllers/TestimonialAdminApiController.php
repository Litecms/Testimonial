<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Testimonial\Http\Requests\TestimonialAdminApiRequest;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Models\Testimonial;

/**
 * Admin API controller class.
 */
class TestimonialAdminApiController extends BaseController
{
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'admin.api';
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
        $this->middleware('jwt.auth:admin.api');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        parent::__construct();
    }

    /**
     * Display a list of testimonial.
     *
     * @return json
     */
    public function index(TestimonialAdminApiRequest $request)
    {
        $testimonials = $this->repository
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
    public function show(TestimonialAdminApiRequest $request, Testimonial $testimonial)
    {
        $testimonial         = $testimonial->presenter();
        $testimonial['code'] = 2001;
        return response()->json($testimonial)
            ->setStatusCode(200, 'SHOW_SUCCESS');

    }

    /**
     * Show the form for creating a new testimonial.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(TestimonialAdminApiRequest $request, Testimonial $testimonial)
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
    public function store(TestimonialAdminApiRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.api');
            $attributes['user_type'] = user_type();
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
    public function edit(TestimonialAdminApiRequest $request, Testimonial $testimonial)
    {
        $testimonial         = $testimonial->presenter();
        $testimonial['code'] = 2003;
        return response()->json($testimonial)
            ->setStatusCode(200, 'EDIT_SUCCESS');
    }

    /**
     * Update the testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return json
     */
    public function update(TestimonialAdminApiRequest $request, Testimonial $testimonial)
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
    public function destroy(TestimonialAdminApiRequest $request, Testimonial $testimonial)
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
