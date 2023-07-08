<!--  END CONTENT AREA  -->
<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">{{$settings['privacy_ar'] ?? ''}} <a target="_blank" href="https://activation-co.com/"></a>.</p>
    </div>
</div>

</div>
</div>
<!-- END MAIN CONTAINER -->

<script src="{{asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>

<script src="{{asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('admin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('admin/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
<script src="{{asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard/dash_1.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
{{--        @if(session()->has('success'))--}}
{{--        fireSuccess("{{ session()->get('success') }}")--}}

{{--    @endif--}}
<!-- Request Errors -->

</script>
@yield('script')
</body>
</html>
