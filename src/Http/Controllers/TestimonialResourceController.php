<?php

namespace Litecms\Testimonial\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Testimonial\Http\Requests\TestimonialRequest;
use Litecms\Testimonial\Interfaces\TestimonialRepositoryInterface;
use Litecms\Testimonial\Models\Testimonial;

/**
 * Resource controller class for testimonial.
 */
class TestimonialResourceController extends BaseController
{

    /**
     * Initialize testimonial resource controller.
     *
     * @param type TestimonialRepositoryInterface $testimonial
     *
     * @return null
     */
    public function __construct(TestimonialRepositoryInterface $testimonial)
    {
        parent::__construct();
        $this->repository = $testimonial;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Testimonial\Repositories\Criteria\TestimonialResourceCriteria::class);
    }

    /**
     * Display a list of testimonial.
     *
     * @return Response
     */
    public function index(TestimonialRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Testimonial\Repositories\Presenter\TestimonialPresenter::class)
                ->$function();
        }

        $testimonials = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('testimonial::testimonial.names'))
            ->view('testimonial::testimonial.index', true)
            ->data(compact('testimonials'))
            ->output();
    }

    /**
     * Display testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function show(TestimonialRequest $request, Testimonial $testimonial)
    {

        if ($testimonial->exists) {
            $view = 'testimonial::testimonial.show';
        } else {
            $view = 'testimonial::testimonial.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('testimonial::testimonial.name'))
            ->data(compact('testimonial'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new testimonial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TestimonialRequest $request)
    {

        $testimonial = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('testimonial::testimonial.name')) 
            ->view('testimonial::testimonial.create', true) 
            ->data(compact('testimonial'))
            ->output();
    }

    /**
     * Create new testimonial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TestimonialRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $testimonial                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('testimonial::testimonial.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('testimonial/testimonial/' . $testimonial->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/testimonial/testimonial'))
                ->redirect();
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
    public function edit(TestimonialRequest $request, Testimonial $testimonial)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('testimonial::testimonial.name'))
            ->view('testimonial::testimonial.edit', true)
            ->data(compact('testimonial'))
            ->output();
    }

    /**
     * Update the testimonial.
     *
     * @param Request $request
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        try {
            $attributes = $request->all();

            $testimonial->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('testimonial::testimonial.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('testimonial/testimonial/' . $testimonial->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('testimonial/testimonial/' . $testimonial->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the testimonial.
     *
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function destroy(TestimonialRequest $request, Testimonial $testimonial)
    {
        try {

            $testimonial->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('testimonial::testimonial.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('testimonial/testimonial/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('testimonial/testimonial/' . $testimonial->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple testimonial.
     *
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function delete(TestimonialRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('testimonial::testimonial.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('testimonial/testimonial'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/testimonial/testimonial'))
                ->redirect();
        }

    }

    /**
     * Restore deleted testimonials.
     *
     * @param Model   $testimonial
     *
     * @return Response
     */
    public function restore(TestimonialRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('testimonial::testimonial.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/testimonial/testimonial'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/testimonial/testimonial/'))
                ->redirect();
        }

    }

}
