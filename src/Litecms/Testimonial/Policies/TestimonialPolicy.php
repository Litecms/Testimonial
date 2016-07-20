<?php

namespace Litecms\Testimonial\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Litecms\Testimonial\Models\Testimonial;

class TestimonialPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the testimonial.
     *
     * @param User $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function view(User $user, Testimonial $testimonial)
    {

        if ($user->canDo('testimonial.testimonial.view') && $user->is('admin')) {
            return true;
        }

        return $user->id === $testimonial->user_id;
    }

    /**
     * Determine if the given user can create a testimonial.
     *
     * @param User $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function create(User $user)
    {
        return $user->canDo('testimonial.testimonial.create');
    }

    /**
     * Determine if the given user can update the given testimonial.
     *
     * @param User $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function update(User $user, Testimonial $testimonial)
    {

        if ($user->canDo('testimonial.testimonial.update') && $user->is('admin')) {
            return true;
        }

        return $user->id === $testimonial->user_id;
    }

    /**
     * Determine if the given user can delete the given testimonial.
     *
     * @param User $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function destroy(User $user, Testimonial $testimonial)
    {

        if ($user->canDo('testimonial.testimonial.delete') && $user->is('admin')) {
            return true;
        }

        return $user->id === $testimonial->user_id;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {

        if ($user->isSuperUser()) {
            return true;
        }

    }

}
