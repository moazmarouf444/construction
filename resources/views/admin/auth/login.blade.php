<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admin/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::to('admin/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo|El+Messiri|Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">


    <!-- Core JS files -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::to('admin/assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/assets/js/pages/login.js')}}"></script>
    <!--<script src="{!!asset('admin/assets/js/plugins/sweetalert-master/dist/sweetalert.min.js')!!}"></script>-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>

    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Advanced login -->
                <form action="{{route('admin.post.login')}}" method="post">
                    @csrf

                    <div class="panel panel-body login-form">

                        <div class="text-center">
                            <div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
                            <h5 class="content-group-lg">تسجيل الدخول<small class="display-block">اشعر بالحريه التامه لتسجيل الدخول في أي وقت</small></h5>
                        </div>

                        <div style="{{$errors->has('phone') ? 'border-bottom:1px solid red' : ''}}" class="form-group  has-feedback has-feedback-left">
                            <input name="email" type="email" class="form-control" placeholder="البريد الالكتروني">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div style="{{$errors->has('password') ? 'border-bottom:1px solid red' : ''}}" class="form-group has-feedback has-feedback-left">
                            <input name="password" type="password" class="form-control" placeholder="كلمه المرور">
                            <div  class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group login-options">
                            @include('admin.includes.alerts.errors')

                        </div>

                        <div class="form-group">
                            <button type="submit" id="addbtn" class="btn bg-blue btn-block">تسجيل الدخول <i class="icon-circle-left2 position-right"></i></button>
                        </div>

                    </div>
                </form>
                <!-- /advanced login -->



            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>

