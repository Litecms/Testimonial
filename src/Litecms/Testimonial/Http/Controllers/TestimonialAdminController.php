<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Testimonial\Http\Requests\TestimonialAdminRequest;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Models\Testimonial;

/**
 * Admin web controller class.
 */
class TestimonialAdminController extends BaseController
{
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    public $guard = 'admin.web';

    /**
     * The home page route of admin.
     *
     * @var string
     */
    public $home = 'admin';
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
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        parent::__construct();
    }

    /**
     * Display a list of testimonial.
     *
     * @return Response
     */
    public function index(TestimonialAdminRequest $request)
    {
        $pageLimit = $request->input('pageLimit');

        if ($request->wantsJson()) {
            $testimonials = $this->repository->setPresenter('\\Litecms\\Testimonial\\Repositories\\Presenter\\TestimonialListPresenter')
                ->scopeQuery(function ($query) {
                    return $query->orderBy('date', 'DESC');
                })->paginate($pageLimit);
            $testimonials['recordsTotal']    = $testimonials['meta']['pagination']['total'];
            $testimonials['recordsFiltered'] = $testimonials['meta']['pagination']['total'];
            $testimonials['request']         = $request->all();
            return response()->json($testimonials, 200);

        }

        $this->theme->prependTitle(trans('testimonial::testimonial.names') . ' :: ');
        return $this->theme->of('testimonial::admin.testimonial.index')->render();
    }

    /**
     * Display testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function show(TestimonialAdminRequest $request, Testimonial $testimonial)
    {

        if (!$testimonial->exists) {
            return response()->view('testimonial::admin.testimonial.new', compact('testimonial'));
        }

        Form::populate($testimonial);
        return response()->view('testimonial::admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for creating a new testimonial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TestimonialAdminRequest $request)
    {

        $testimonial = $this->repository->newInstance([]);

        Form::populate($testimonial);

        return response()->view('testimonial::admin.testimonial.create', compact('testimonial'));

    }

    /**
     * Create new testimonial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TestimonialAdminRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.web');
            $attributes['user_type'] = user_type();
            $testimonial           = $this->repository->create($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('testimonial::testimonial.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/testimonial/testimonial/' . $testimonial->getRouteKey()),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 400,
            ], 400);
        }

    }

    /**
     * Show testimonial for editing.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function edit(TestimonialAdminRequest $request, Testimonial $testimonial)
    {
        Form::populate($testimonial);
        return response()->view('testimonial::admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function update(TestimonialAdminRequest $request, Testimonial $testimonial)
    {
        try {

            $attributes = $request->all();

            $testimonial->update($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('testimonial::testimonial.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/testimonial/testimonial/' . $testimonial->getRouteKey()),
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/testimonial/testimonial/' . $testimonial->getRouteKey()),
            ], 400);

        }

    }

    /**
     * Remove the testimonial.
     *
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function destroy(TestimonialAdminRequest $request, Testimonial $testimonial)
    {

        try {

            $t = $testimonial->delete();

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('testimonial::testimonial.name')]),
                'code'     => 202,
                'redirect' => trans_url('/admin/testimonial/testimonial/0'),
            ], 202);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/testimonial/testimonial/' . $testimonial->getRouteKey()),
            ], 400);
        }

    }

}
