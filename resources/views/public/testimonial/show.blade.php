<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{!!url(@$testimonial->defaultImage('testimonial.md','image'))!!}" class="img-responsive img-circle center-block" alt="">
                        <h4 class="text-dark header-title m-t-0">
                            {!! $testimonial['name'] !!}
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-default pull-right" href="{{ trans_url('testimonials') }}">
                            Back
                        </a>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="name">
                                {!! trans('testimonial::testimonial.label.name') !!}
                            </label>
                            <br/>
                            {!! $testimonial['name'] !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="designation">
                                {!! trans('testimonial::testimonial.label.designation') !!}
                            </label>
                            <br/>
                            {!! $testimonial['designation'] !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="description">
                                {!! trans('testimonial::testimonial.label.description') !!}
                            </label>
                            <br/>
                            {!! $testimonial['description'] !!}
                        </div>
                    </div>
                    <!-- <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="image">
                                {!! trans('testimonial::testimonial.label.image') !!}
                            </label>
                            <br/>
                        </div>
                    </div> -->
                    <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="status">
                                {!! trans('testimonial::testimonial.label.status') !!}
                            </label>
                            <br/>
                            {!! $testimonial['status'] !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class"form-group"="">
                            <label for="date">
                                {!! trans('testimonial::testimonial.label.date') !!}
                            </label>
                            <br/>
                            {!! $testimonial['date'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('testimonial::public.testimonial.aside')
        </div>
    </div>
</div>
