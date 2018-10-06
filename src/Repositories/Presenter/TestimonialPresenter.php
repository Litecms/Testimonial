<?php

namespace Litecms\Testimonial\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class TestimonialPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TestimonialTransformer();
    }
}