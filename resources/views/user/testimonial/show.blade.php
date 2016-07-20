@include('public::notifications')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-dark  header-title m-t-0"> Details of {!! $testimonial['name'] !!} </h4>
        </div>
        <div class="col-md-6">
            <div class='pull-right'>
                <a href="{{ trans_url('/user/testimonial/testimonial') }}" class="btn btn-default"> {{ trans('cms.back')  }}</a>
                <a href="{{ trans_url('/user/testimonial/testimonial') }}/{{ testimonial->getRouteKey() }}/edit" class="btn btn-success"> {{ trans('cms.edit')  }}</a>
                <a href="{{ trans_url('/user/testimonial/testimonial') }}/{{ testimonial->getRouteKey() }}/copy" class="btn btn-warning"> {{ trans('cms.copy')  }}</a>
                <a href="{{ trans_url('/user/testimonial/testimonial') }}/{{ testimonial->getRouteKey() }}/delete" class="btn btn-danger"> {{ trans('cms.delete')  }}</a>
            </div>
        </div>
    </div>
    <p class="text-muted m-b-25 font-13">
        Your awesome text goes here.
    </p>
    <hr/>

    <div class="row">
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
                <label for="status">
                    {!! trans('testimonial::testimonial.label.status') !!}
                </label><br />
                    {!! $testimonial['status'] !!}
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
    </div>
</div>