<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Testimonial\Http\Requests\TestimonialUserRequest;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Models\Testimonial;

class TestimonialUserController extends BaseController
{

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'web';

    /**
     * The home page route of user.
     *
     * @var string
     */
    protected $home = 'home';
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
        $this->middleware('auth:web');
        $this->middleware('auth.active:web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(TestimonialUserRequest $request)
    {
        $this->repository->pushCriteria(new \Litecms\Testimonial\Repositories\Criteria\TestimonialUserCriteria());
        $testimonials = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC');
        })->paginate();

        $this->theme->prependTitle(trans('testimonial::testimonial.names') . ' :: ');

        return $this->theme->of('testimonial::user.testimonial.index', compact('testimonials'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Testimonial $testimonial
     *
     * @return Response
     */
    public function show(TestimonialUserRequest $request, Testimonial $testimonial)
    {
        Form::populate($testimonial);

        return $this->theme->of('testimonial::user.testimonial.show', compact('testimonial'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TestimonialUserRequest $request)
    {

        $testimonial = $this->repository->newInstance([]);
        Form::populate($testimonial);

        return $this->theme->of('testimonial::user.testimonial.create', compact('testimonial'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TestimonialUserRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id();
            $testimonial           = $this->repository->create($attributes);

            return redirect(trans_url('/user/testimonial/testimonial'))
                ->with('message', trans('messages.success.created', ['Module' => trans('testimonial::testimonial.name')]))
                ->with('code', 201);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Testimonial $testimonial
     *
     * @return Response
     */
    public function edit(TestimonialUserRequest $request, Testimonial $testimonial)
    {

        Form::populate($testimonial);

        return $this->theme->of('testimonial::user.testimonial.edit', compact('testimonial'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param Testimonial $testimonial
     *
     * @return Response
     */
    public function update(TestimonialUserRequest $request, Testimonial $testimonial)
    {
        try {
            $this->repository->update($request->all(), $testimonial->getRouteKey());

            return redirect(trans_url('/user/testimonial/testimonial'))
                ->with('message', trans('messages.success.updated', ['Module' => trans('testimonial::testimonial.name')]))
                ->with('code', 204);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(TestimonialUserRequest $request, Testimonial $testimonial)
    {
        try {
            $this->repository->delete($testimonial->getRouteKey());
            return redirect(trans_url('/user/testimonial/testimonial'))
                ->with('message', trans('messages.success.deleted', ['Module' => trans('testimonial::testimonial.name')]))
                ->with('code', 204);

        } catch (Exception $e) {

            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);

        }
    }
}
