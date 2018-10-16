            @include('testimonial::testimonial.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('testimonial::testimonial.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($testimonial->defaultImage('images' , 'xl'))!!}" alt="{{$testimonial->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('testimonial::testimonial.label.id') !!}
                </label><br />
                    {!! $testimonial['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('testimonial::testimonial.label.name') !!}
                </label><br />
                    {!! $testimonial['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="designation">
                    {!! trans('testimonial::testimonial.label.designation') !!}
                </label><br />
                    {!! $testimonial['designation'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('testimonial::testimonial.label.description') !!}
                </label><br />
                    {!! $testimonial['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('testimonial::testimonial.label.image') !!}
                </label><br />
                    {!! $testimonial['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="date">
                    {!! trans('testimonial::testimonial.label.date') !!}
                </label><br />
                    {!! $testimonial['date'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('testimonial::testimonial.label.slug') !!}
                </label><br />
                    {!! $testimonial['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('testimonial::testimonial.label.status') !!}
                </label><br />
                    {!! $testimonial['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('testimonial::testimonial.label.user_id') !!}
                </label><br />
                    {!! $testimonial['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('testimonial::testimonial.label.user_type') !!}
                </label><br />
                    {!! $testimonial['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="upload_folder">
                    {!! trans('testimonial::testimonial.label.upload_folder') !!}
                </label><br />
                    {!! $testimonial['upload_folder'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('testimonial::testimonial.label.deleted_at') !!}
                </label><br />
                    {!! $testimonial['deleted_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('testimonial::testimonial.label.created_at') !!}
                </label><br />
                    {!! $testimonial['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('testimonial::testimonial.label.updated_at') !!}
                </label><br />
                    {!! $testimonial['updated_at'] !!}
            </div>
        </div>
    </div>

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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



