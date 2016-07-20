<div class="box-header with-border">
    <h3 class="box-title">  {!! trans('testimonial::testimonial.names') !!}</h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#testimonial-testimonial-entry' data-href='{!!trans_url('admin/testimonial/testimonial/create')!!}'><i class="fa fa-plus-circle"></i> New </button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" style="min-height:100px">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="text-center">
            <small>
            <button type="button" class="btn btn-app" data-toggle="tooltip" data-placement="top" title="" data-action='NEW' data-load-to='#testimonial-testimonial-entry' data-href='{!!trans_url('admin/testimonial/testimonial/create')!!}'>
            <span class="badge bg-purple">{!! Testimonial::count('testimonial') !!}</span>
            <i class="fa fa-plus-circle  fa-3x"></i>
            {{ trans('cms.create') }} {!! trans('testimonial::testimonial.name') !!}
            </button>
            <br>{!! trans('testimonial::testimonial.text.preview') !!}
            </small>
            </h1>
        </div>
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>