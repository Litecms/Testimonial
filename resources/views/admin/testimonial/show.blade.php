    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('testimonial::testimonial.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#testimonial-testimonial-entry' data-href='{{guard_url('testimonial/testimonial/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($testimonial->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#testimonial-testimonial-entry' data-href='{{ guard_url('testimonial/testimonial') }}/{{$testimonial->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#testimonial-testimonial-entry' data-datatable='#testimonial-testimonial-list' data-href='{{ guard_url('testimonial/testimonial') }}/{{$testimonial->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('testimonial-testimonial-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('testimonial/testimonial'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('testimonial::testimonial.name') !!}  [{!! $testimonial->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('testimonial::admin.testimonial.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>