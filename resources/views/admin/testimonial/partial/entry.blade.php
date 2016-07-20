                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('name')
                       ->required()
                       -> label(trans('testimonial::testimonial.label.name'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.name'))!!}
                </div>

                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('designation')
                       ->required()
                       -> label(trans('testimonial::testimonial.label.designation'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.designation'))!!}
                </div>
                <div class='col-md-6 col-sm-6'>
                       {!! Form::date('date')
                       ->required()
                       -> label(trans('testimonial::testimonial.label.date'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.date'))!!}
                </div>

                <div class='col-md-6 col-sm-6'>
                       {!! Form::select('status')
                       -> options(trans('testimonial::testimonial.options.status'))
                       -> label(trans('testimonial::testimonial.label.status'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.status'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                       {!! Form::textarea('description')
                       ->addClass('html-editor')
                       -> label(trans('testimonial::testimonial.label.description'))
                       -> placeholder(trans('testimonial::testimonial.placeholder.description'))!!}
                </div>
                <div class='col-md-6 col-sm-12'>
                 Photo:
                      {!!Filer::uploader('image',@$testimonial->getUploadURL('image'),1)!!}
                      {!! Filer::editor('image', @$testimonial['image'],1) !!}
                </div>
                {!!Form::hidden('upload_folder')!!}
