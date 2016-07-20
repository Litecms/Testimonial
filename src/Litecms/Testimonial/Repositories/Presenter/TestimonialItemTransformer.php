<?php

namespace Litecms\Testimonial\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class TestimonialItemTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Testimonial\Models\Testimonial $testimonial)
    {
        return [
            'id'          => $testimonial->getRouteKey(),
            'name'        => $testimonial->name,
            'designation' => $testimonial->designation,
            'description' => $testimonial->description,
            'image'       => $testimonial->image,
            'status'      => $testimonial->status,
            'date'        => $testimonial->date,
        ];
    }
}
