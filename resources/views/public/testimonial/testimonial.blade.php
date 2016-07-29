<section id="title">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>Testimonials</h1>
			</div>
		</div>
	</div>
</section>




<section id="testimonials-long">
			<div class="container">

				@forelse($testimonials as $value)
				<div class="row">
					<div class="col-sm-3 col-md-2">
						{!!$value->fileShow('image')!!}
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>{{$value->description}}</p>
							<footer>
								{{$value->name}}
								<cite title="Brand Manager in Ebay Inc.">{{$value->designation}}</cite>
							</footer>
						</blockquote>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
					@empty
                    @endif
				</div>
		</section>



		