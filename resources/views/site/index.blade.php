@extends('site.layouts.master')
@section('title')
    الصفحه الرئيسيه
@stop
@section('content')
    <main id="content" class="content">
        <section
            class="MainSlider lqd-css-sticky bg-cover bg-center d-flex flex-wrap" style="height: 100vh"
            data-custom-animations="true"
            data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1500", "delay":"900", "easing":"easeOutQuint", "direction":"forward", "initValues":{ "opacity":0}, "animations":{ "opacity":1} }'
            data-row-bg="true" data-animate-onscroll="true" data-animate-from='{"opacity":1}'
            data-animate-to='{"opacity":0}' data-slideshow-bg="true"
            data-slideshow-options='{"effect":"fade","imageArray":["site/uploads/site/slide-3.jpg"]}'>

            <div class="slider-bg-curve"></div>

            <div class="container">
                <div class="MainMessage" data-custom-animations="true"
                     data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1500", "delay":"600", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>
                    <div>
                        <div class="strong6" data-fittext="true"
                             data-fittext-options='{"compressor":0.675,"maxFontSize":"18","minFontSize":"14"}'
                             data-split-text="true" data-split-options='{ "type": "lines" }' data-text-rotator="true">
							<span class="">
								<span class="txt-rotate-keywords">
                                    @foreach($questions as $question)
                                        <span class="keyword">{{$question->question}}</span>
                                    @endforeach
								</span>
							</span>
                        </div>
                    </div>
                    <h6  class="h4 strong6 color-primary mt-2 mb-2">{{$intro->main_title}}</h6>
                    <h6  class="h5  text-secondary mt-0">{{$intro->sub_title}}</h6>
                    <h6  class="h5  text-dark strong">{{$intro->description}}</h6>

{{--                    <p style="font-size: small" class="text-dark strong"><span>{{$intro->description}}</span>  </p>--}}


                    <p class="mt-3 strong6">
                        <span>للاستفسار يرجى الاتصال على الرقم: </span>
                        <a href="tel:+{{$settings['phone'] ?? ''}}"
                           class="text-primary ltr">{{$settings['phone'] ?? ''}}</a>
                        <span>أو على</span>
                        <a href="https://api.whatsapp.com/send?phone={{$settings['whatsapp'] ?? ''}}"
                           class="text-whatsapp">واتساب</a>
                    </p>

                    <div class=" d-flex align-items-center">
                        <a href="{{$settings['video'] ?? ''}}"
                           class="btn btn-solid btn-sm round bg-youtube strong6 fresco">
								<span>
									<span class="btn-icon"><i class="fa fa-youtube ml-2"></i></span>
									<span class="btn-text">فيديو تعريفي</span>
								</span>
                        </a>


                    </div><!-- /.header-module -->

                </div>
            </div>


            <span class="row-bg-loader"></span>

        </section>

        <section class="ligher-bg pb-30 z-9" style="margin-top: -20px">
            <div class="container">
                <div class="row">

                    <div class="lqd-column col-md-10 col-md-offset-1 text-center">
                        <div class="box bg-white box-shadow-1 p-3 round">
                            <h2 class=" Round-title font-size-22 strong6 bg-secondary text-white ">حقائق عن الشركة</h2>
                            <div class="row">
                                @foreach($facts as $fact)

                                    <div class="lqd-column col-md-3 col-sm-6 text-center">
                                        <div class="liquid-counter">

                                            <div class="liquid-counter-element text-primary font-size-60"
                                                 data-enable-counter="true"
                                                 data-counter-options='{ "targetNumber": "{{$fact->number}}", "blurEffect": true }'>
                                                <span>{{$fact->number}}</span>
                                            </div><!-- /.liquid-counter-element -->
                                            <span class="liquid-counter-text strong6 font-size-16">
											{{$fact->title}}
										</span>

                                        </div>
                                    </div><!-- /.col-md-3 -->
                                @endforeach
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container -->
        </section>

        <section class="bg-white pt-70 pb-70 z-9" id="recent-news">
            <div class="container">

                <header class="fancy-title text-center mb-30">
                    <h2 class="mb-4 font-size-32 color-primary strong6">جديد الشركة </h2>
                </header>

                <div
                    class="carousel-container carousel-nav-floated carousel-nav-center carousel-nav-middle carousel-nav-md carousel-nav-solid carousel-nav-rectangle carousel-nav-shadowed carousel-dots-style1">
                    <div class="carousel-items row mx-0"
                         data-lqd-flickity='{"cellAlign":"center","prevNextButtons":true,"buttonsAppendTo":"self","pageDots":false,"groupCells":true,"wrapAround":true,"pauseAutoPlayOnHover":false,"navArrow":"1","navOffsets":{"nav":{"top":"25%"},"prev":"-13px","next":"-13px"}}'>
                        @foreach($news as $new)
                            <div class="carousel-item col-sm-6 col-md-3 px-2">
                                <div class="fancy-box content-box-heading-sm fancy-box-tour">
                                    <a href="{{route('site.new',$new->id)}}" class="fancy-box-image loaded">
                                        <img src="{{$new->image}}" style="width: 200px; height: 200px"
                                             alt="{{$new->title}}">
                                    </a>
                                    <div class="fancy-box-contents">
                                        <a href="{{route('site.new',$new->id)}}" class="d-block mb-3">
                                            <h3 class="font-weight-semibold">{{$new->title}}</h3>
                                        </a><!-- /.fancy-box-header -->
                                        <div class="fancy-box-info">
                                            <p>{{Str::limit($new->description, 30)}}</p>
                                        </div><!-- /.fancy-box-info -->
                                    </div><!-- /.fancy-box-contents -->
                                    <div class="fancy-box-footer">
                                        <span><i class="icon-basic_calendar"></i>  {{ \Carbon\Carbon::parse($new->created_at)->translatedFormat('l j F Y ') }} </span>
                                        <span class="fancy-box-icon"><i class="icon-liquid_arrow_right"></i></span>
                                    </div><!-- /.fancy-box-footer -->
                                </div><!-- /.fancy-box -->
                            </div><!-- /.carousel-item col-sm-6 col-md-4 -->
                        @endforeach

                    </div><!-- /.carousel-items -->
                </div><!-- /.carousel-container -->

            </div><!-- /.container -->
        </section>
        <section class="bg-light pt-70 pb-70 z-9" id="services">
            <div class="container">


                <div class="row">
                    <div class="lqd-column col-md-10 col-md-offset-1">
                        <header class="fancy-title text-center mb-60">
                            <h2 class="mb-4 font-size-32 color-primary strong6">خدمات متميزة </h2>
                            <p class="font-size-20">{{$settings['services']}}</p>
                        </header>
                    </div><!-- /.lqd-column col-md-12 -->
                </div><!-- /.row -->

                <div class="row mx-md-0" data-custom-animations="true"
                     data-ca-options='{ "triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"350", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":-60, "opacity":0}, "animations":{"translateY":0, "opacity":1} }'>

                    <div class="col-md-6">
                        <div class="fancy-box fancy-icon-box fancy-box-case-study" data-hover3d="true">
                            <div
                                class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled  iconbox-has-fill-element"
                                data-stacking-factor="1">

                                <div class="iconbox-icon-wrap" style="width: 70px">
									<span class="iconbox-icon-container">
										<svg style="height: 40px" viewBox="0 0 238 512" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
											<g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
												<g id="3650534" fill-rule="nonzero">
													<path
                                                        d="M153.234,178.43 L167.734,257.09 L15.524,409.3 L36.574,295.09 L153.234,178.43 Z M137.514,93.14 L237.046,335.789 L189.442,374.875 L167.734,257.09 L153.234,178.43 L137.514,93.14 Z"
                                                        id="Combined-Shape" fill="#A3C12F"></path>
													<path
                                                        d="M210.188,432.268 L148.096,95.388 L175.236,45.39 C177.353,41.491 176.647,36.663 173.503,33.532 L142.745,2.912 C140.871,1.047 138.335,-2.84217094e-14 135.691,-2.84217094e-14 L75.618,-2.84217094e-14 C72.973,-2.84217094e-14 70.437,1.047 68.563,2.913 L37.805,33.533 C34.66,36.663 33.955,41.491 36.072,45.391 L63.212,95.388 L1.12,432.266 C0.417,436.076 1.978,439.948 5.126,442.206 L99.826,510.126 C101.568,511.375 103.611,512 105.654,512 C107.697,512 109.74,511.375 111.482,510.126 L206.182,442.206 C209.329,439.949 210.89,436.077 210.188,432.268 Z M82.119,103.14 L129.188,103.14 L130.225,108.767 L69.977,169.016 L82.119,103.14 Z M79.746,20 L131.561,20 L154.088,42.426 L131.987,83.138 L79.317,83.138 L57.217,42.426 L79.746,20 Z M63.586,203.691 L134.627,132.649 L168.915,318.681 L42.905,444.69 L21.938,429.652 L63.586,203.691 Z M105.654,489.694 L59.377,456.504 L173.318,342.564 L189.37,429.652 L105.654,489.694 Z"
                                                        id="Shape" fill="#020288"></path>
												</g>
											</g>
										</svg>
									</span>
                                </div><!-- /.iconbox-icon-wrap -->
                                <div class="contents">
                                    <h3 class="font-weight-semibold font-size-22 mt-0 mb-10 color-primary">تخصصات
                                        عدة</h3>
                                    <p>{{Str::limit($settings['majors'], 200)}}</p>
                                </div><!-- /.contents -->
                            </div><!-- /.iconbox -->
                        </div><!-- /.iconbox -->
                    </div>
                    <div class="col-md-6">
                        <div class="fancy-box fancy-icon-box fancy-box-case-study" data-hover3d="true">
                            <div
                                class="iconbox iconbox-side iconbox-round iconbox-shadow iconbox-heading-sm iconbox-filled iconbox-filled  iconbox-has-fill-element"
                                data-stacking-factor="1">

                                <div class="iconbox-icon-wrap" style="width: 70px">
										<span class="iconbox-icon-container">
											<svg style="height: 40px" viewBox="0 0 512 392" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
		<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<g id="3650511-1" fill-rule="nonzero">
				<polygon id="Path" fill="#A3C12F"
                         points="331.908 129.345 275.151 219.236 362.374 381.245 490.955 381.245"></polygon>
				<path
                    d="M502,371.245 L368.347,371.245 L208.791,74.883 L266.191,74.883 C269.602,74.883 272.778,73.144 274.616,70.27 C276.454,67.396 276.7,63.783 275.268,60.687 L264.697,37.82 L275.268,14.952 C276.7,11.856 276.453,8.243 274.616,5.369 C272.778,2.495 269.602,0.756 266.191,0.756 L196.576,0.756 C191.053,0.756 186.576,5.233 186.576,10.756 L186.709,71.017 L25.072,371.245 L10,371.245 C4.477,371.245 -2.84217094e-14,375.722 -2.84217094e-14,381.245 C-2.84217094e-14,386.768 4.477,391.245 10,391.245 L502,391.245 C507.522,391.245 512,386.768 512,381.245 C512,375.722 507.522,371.245 502,371.245 Z M196.709,94.633 L244.911,184.165 L242.934,189.587 C241.121,194.557 236.924,198.05 231.707,198.929 C226.489,199.809 221.38,197.885 218.038,193.783 L197.643,168.752 C195.869,166.574 193.26,165.243 190.455,165.085 C187.65,164.926 184.908,165.955 182.899,167.919 L168.143,182.347 C165.202,185.223 161.315,186.682 157.213,186.464 C154.137,186.299 151.287,185.208 148.952,183.337 L196.709,94.633 Z M250.552,20.755 L244.604,33.623 C243.374,36.285 243.374,39.353 244.604,42.015 L250.552,54.882 L206.71,54.882 L206.71,25.564 C206.71,25.009 206.664,24.465 206.577,23.935 L206.577,20.755 L250.552,20.755 Z M47.787,371.246 L139.417,201.051 C144.391,204.224 150.152,206.114 156.141,206.436 C165.758,206.954 175.236,203.386 182.127,196.648 L189.055,189.873 L202.535,206.417 C209.212,214.611 218.855,219.149 229.126,219.149 C231.077,219.149 233.053,218.985 235.033,218.651 C243.813,217.171 251.377,212.578 256.577,205.83 L345.634,371.246 L47.787,371.246 L47.787,371.246 Z"
                    id="Shape" fill="#020288"></path>
			</g>
		</g>
	</svg>
										</span>
                                </div><!-- /.iconbox-icon-wrap -->
                                <div class="contents">
                                    <h3 class="font-weight-semibold font-size-22 mt-0 mb-10 color-primary">مهارة
                                        وخبرة</h3>
                                    <p>  {{Str::limit($settings['skills'], 200)}} </p>
                                </div><!-- /.contents -->
                            </div><!-- /.iconbox -->
                        </div><!-- /.iconbox -->
                    </div>

                </div><!-- /.row mx-md-0 -->

            </div><!-- /.container -->
        </section>

        <section id="contact-us">
            <article class="blog-single bg-light">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <div class="blog-single-content entry-content pull-up expanded">
                                <br>
                                <h2 class="mb-4 font-size-32 color-primary strong6" style="text-align: center">احصل علي اسشتارتك مجانا  </h2>

                                <form class="d-flex flex-column p-1" id="contactForm">
                                    @csrf

                                    <div class="form-group ">
                                        <input type="text" name="name" class="form-control"
                                               id="exampleFormControlInput1" placeholder="الاسم"
                                               style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 30px;">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="phone" id="exampleFormControlInput1"
                                               placeholder="الهاتف"
                                               class="form-control"
                                               style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 10px;">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" id="exampleFormControlInput1"
                                               placeholder="الايميل"
                                               class="form-control"
                                               style="border:none; border-bottom: 1px dotted; margin-bottom: 10px;  margin-top: 10px;">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 10px;">
                                        <input type="text" name="message" class="form-control"
                                               id="exampleFormControlInput1"
                                               placeholder="الرسالة"
                                               style="border:none; border-bottom: 1px dotted;">
                                    </div>

                                    <button type="submit"
                                            class="btn btn-solid bg-whatsapp semi-round btn-block contact-btn">
								<span>
									<span class="btn-txt">إتصل بنا</span>
								</span>
                                    </button>

                                </form>

                            </div>

                        </div><!-- /.col-md-8 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->


            </article><!-- /.blog-single -->
        </section>
        <section id="contact" class="vc_row bg-cover bg-center pt-60 pb-50 " data-parallax="true"
                 data-parallax-options='{"parallaxBG": true}' style="background-image: url(site/uploads/bg-1.jpg);">

            <div class="liquid-row-overlay bg-fade-dark-035"></div>

            <div class="container">
                <div class="row d-md-flex flex-wrap align-items-center">

                    <div class="lqd-column col-md-7 text-center text-md-right">

                        <h3 class="mt-0 strong6 text-white">
                            مع {{$settings['site_name'] ?? ''}} للاستشارات الهندسية.. حلمُك يصبحُ حقيقة بفريق ُعملٍ متكامل.. من كافة التخصصات الهندسية

                            </h3>

                    </div><!-- /.lqd-column col-md-7 -->

                    <div class="lqd-column col-md-5">

                        <div class="d-flex">
                            <a href="tel:+{{$settings['phone'] ?? ''}}" target="_blank" class="btn btn-solid semi-round btn-block">
								<span>
									<span class="btn-txt">إتصل بنا</span>
								</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone={{$settings['whatsapp'] ?? ''}}" target="_blank"
                               class="btn btn-solid bg-whatsapp semi-round btn-block">
							<span>
								<span class="btn-txt"><i class="fa fa-whatsapp"></i> {{$settings['whatsapp'] ?? ''}}</span>
							</span>
                            </a>
                        </div>

                    </div><!-- /.lqd-column col-md-3 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


    </main>
@stop
@section('script')
    <script>
        $(".contact-btn").on('click', function (e) {
            e.preventDefault();
            var form = $('#contactForm').get(0);
            var formData = new FormData(form);
            var oldText = $(this).text();
            $.ajax({
                url: "{{route('site.contact.us')}}",
                type: "POST",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('.site-btn').removeAttr("disabled").css({
                        opacity: '1'
                    }).text(oldText);
                    if (data.key == 'success') {
                        setInterval(function () {
                            location.assign(data.msg);
                        }, 3000);
                        swal({
                            title: "تم ارسال الرساله بنجاح",
                            type: 'success',
                            timer: 5000,
                            showCloseButton: true,
                            showConfirmButton: false,
                            animation: true,
                        }).catch(swal.noop);
                    } else {
                        Swal.fire({
                            title: data.msg,
                            position: 'top',
                            timer: 3000,
                            type: 'error',
                            showCloseButton: false,
                            showConfirmButton: false,
                            animation: true
                        })
                    }
                }
            });
        });
    </script>

@stop
