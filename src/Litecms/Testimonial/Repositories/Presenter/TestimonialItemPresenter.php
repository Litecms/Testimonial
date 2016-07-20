<?php

namespace Litecms\Testimonial\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class TestimonialItemPresenter extends FractalPresenter
{

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TestimonialItemTransformer();
    }
}
