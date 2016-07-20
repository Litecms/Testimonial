<div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('testimonial::testimonial.label.name'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('designation')
                       -> label(trans('testimonial::testimonial.label.designation'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.designation'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('testimonial::testimonial.label.description'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('image')
                       -> label(trans('testimonial::testimonial.label.image'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.image'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('status')
                       -> label(trans('testimonial::testimonial.label.status'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.status'))!!}
                </div>



{!!   Form::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}
