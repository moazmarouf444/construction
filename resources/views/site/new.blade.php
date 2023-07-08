@extends('site.layouts.master')
@section('title')
    جديد الشركه
@stop

@section('content')
    <main id="content" class="content" >
		<div class="blog-single-cover scheme-light" data-fullheight="true" data-inview="true" data-inview-options='{ "onImagesLoaded": true }' style="background-color: #666871;">

			<figure class="blog-single-media" data-responsive-bg="true" data-parallax="true" data-parallax-options='{ "parallaxBG": true, "triggerHook": "onLeave" }' data-parallax-from='{ "translateY": "0%" }' data-parallax-to='{ "translateY": "60%" }'>
				<img src="{{$new->image}}" alt="Blog single">
			</figure>

			<div class="blog-single-details">

				<div class="text-center">
					<h1 class="blog-single-title entry-title h2 strong6" data-split-text="true" data-split-options='{ "type": "lines" }'>{{$new->title}} </h1>
				</div><!-- /.row -->

			</div><!-- /.blog-single-details -->

		</div><!-- /.blog-single-cover -->

		<article class="blog-single bg-light">

			<div class="container">

				<div class="row">

					<div class="col-md-8 col-md-offset-2">

						<div class="blog-single-content entry-content pull-up expanded">

							<h3>{{$new->description}}</h3>

					</div><!-- /.col-md-8 -->

				</div><!-- /.row -->
			</div><!-- /.container -->


		</article><!-- /.blog-single -->


	</main>

@stop
