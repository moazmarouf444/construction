<footer class="main-footer bg-white" data-sticky-footer="true">

    <section class="pt-50">

        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-2 text-center">
                    <div class="mb-15">
                        <img src="{{URL::to('assets/uploads/images/settings/'.$settings['logo_footer'])}}" width="150" height="200">
                    </div>
                </div><!-- /.col-md-3 col-sm-6 -->

                <div class="lqd-column col-md-6">
                    <ul class="main-nav foot-inline-nav" data-localscroll="true">
                        <li class="is-active"><a href="#content"> <span>الرئيسة</span></a></li>
                        <li><a href="#recent-news"> <span>جديد الشركه</span></a></li>
                        <li><a href="#services"><span>خدامتنا</span></a></li>
                        <li><a href="#contact-us"><span>تواصل معنا</span></a></li>

                    </ul>

                    <h3 class="strong4 ">عن الموقع</h3>
                    <h6 class="">{{$settings['about'] ?? ''}}</h6>
                    <ul class="social-icon branded round social-icon-sm mb-30">
                        <li><a href="{{$settings['facebook'] ?? ''}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$settings['instagram'] ?? ''}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$settings['video'] ?? ''}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>

                </div><!-- /.col-md-3 col-sm-6 -->

                <div class="lqd-column col-md-3 ">

                    <h4 class="strong6">التواصل</h4>
                    <p>
                        <br>
                        رقم الجوال  : <a style="font-weight: bolder" href="tel:{{$settings['site_phone'] ?? ''}}">+{{$settings['site_phone'] ?? ''}}</a> <br>
                        البريد الالكتروني : <a style="font-weight: bolder" href="mailto:{{$settings['email'] ?? ''}}">{{$settings['email'] ?? ''}}</a><br>
                    </p>

                </div><!-- /.col-md-3 col-sm-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

    </section>


</footer><!-- /.main-footer -->

</div><!-- /#wrap -->

<div class="modal fade MobMenu" id="MobMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <a class="AmirHeader-btn close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </a>
    <div class="modal-dialog" role="document">

        <div class="MainSec-mob">
            <div class="MainSec-mob-logo">
                <img src="{{URL::to('assets/uploads/images/settings/'.$settings['logo_footer'])}}">
            </div>
            <ul class="main-nav nav " data-localscroll="true">
                <li class="is-active"><a href="#content"> <span>الرئيسة</span></a></li>
                <li><a href="#recent-news"><span>جديد الشركة</span></a></li>
                <li><a href="#services"><span>خدامتنا </span></a></li>
                <li><a href="#contact-us"><span>تواصل معنا</span></a></li>
            </ul>

            <ul class="social-icon branded round social-icon-sm mb-30 p-15">
                <li><a href=""{{$settings['facebook'] ?? ''}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href=""{{$settings['instagram'] ?? ''}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href=""{{$settings['video'] ?? ''}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            </ul>

        </div>
    </div>
</div>

<script src="{{asset('site/assets/js/vendors.min.js')}}"></script>
<script src="{{asset('site/assets/js/main.min.js')}}"></script>
@yield('script')
</body>
</html>
