            <div class='row'>
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
                   <div class='form-group'>
                     <label for='date' class='control-label'>{!!trans('testimonial::testimonial.label.date')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('date')
                        -> placeholder(trans('testimonial::testimonial.placeholder.date'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>
                <div class='col-md-12 col-sm-6'>
                       {!! Form::textarea('description')
                       -> rows(4)
                       -> label(trans('testimonial::testimonial.label.description'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.description'))!!}
                </div>
                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('testimonial::testimonial.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $testimonial->files('image')
                            ->url($testimonial->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $testimonial->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>