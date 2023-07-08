@extends('admin.layouts.master')
@section('title')
    الملف الشخصي
@endsection
@section('content')
    <div class="navbar navbar-default navbar-xs">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
        </ul>

        <h1>الملف الشخصي</h1>
    </div>
    <form class="update" action="{{ route('admin.profile.update', ['id' => $admin->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="activity">

                            <!-- Timeline -->
                            <div class="timeline timeline-left content-group">
                                <div class="timeline-container">

                                    <div class="panel panel-flat timeline-content">
                                        <div class="panel-heading">
                                            <h6 class="panel-title">أخر تعديل</h6>
                                            <div class="heading-elements">
                                                <span class="heading-text"><i class="icon-history position-left text-success"></i>{{auth()->guard('admin')->user()->updated_at}}</span>
                                                <ul class="icons-list">
                                                    <li><a data-action="reload"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="chart-container">
                                                <div class="chart has-fixed-height" id="sales">
                                                    <fieldset>
                                                        <div class="form-group"  style="padding-top: 20px">
                                                            <label class="control-label col-lg-2">الاسم</label>
                                                            <div class="col-lg-10">
                                                                <div class="input-group">
                                                                    <input style="{{$errors->has('name') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{auth()->guard('admin')->user()->name}}" name="name" type="text" class="form-control" placeholder="الاسم">
                                                                    <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                                                </div>
                                                            </div>
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group"  style="padding-top: 20px">
                                                            <label class="control-label col-lg-2">رقم الجوال</label>
                                                            <div class="col-lg-10">
                                                                <div class="input-group">
                                                                    <input style="{{$errors->has('phone') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{Auth::user()->phone}}" name="phone" type="text" class="form-control" placeholder="البريد الالكتروني">
                                                                    <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                                                </div>
                                                            </div>
                                                            <p style="color: red">{{$errors->has('phone') ? '*' . $errors->first('phone') : ''}}</p>
                                                        </div>
                                                        <div class="form-group"  style="padding-top: 20px">
                                                            <label class="control-label col-lg-2">البريد الالكتروني</label>
                                                            <div class="col-lg-10">
                                                                <div class="input-group">
                                                                    <input style="{{$errors->has('email') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{Auth::user()->email}}" name="email" type="text" class="form-control" placeholder="البريد الالكتروني">
                                                                    <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                                                </div>
                                                            </div>
                                                            <p style="color: red">{{$errors->has('email') ? '*' . $errors->first('email') : ''}}</p>
                                                        </div>
                                                        <div class="form-group"  style="padding-top: 20px">
                                                            <label class="control-label col-lg-2">كلمه مرور جديده</label>
                                                            <div class="col-lg-10">
                                                                <div class="input-group">
                                                                    <input style="{{$errors->has('password') ? 'border-bottom:1px solid red;' : ''}}" width="100%" name="password" type="password" class="form-control">
                                                                    <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                                                </div>
                                                            </div>
                                                            <p style="color: red">{{$errors->has('password') ? '*' . $errors->first('password') : ''}}</p>
                                                        </div>
                                                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                                        <div class="form-group" style="padding:40px 10px;text-align: center;float: left">
                                                            <button  id="sub" type="submit" class="btn bg-primary" style="width:100px;">تعديل</button>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /sales stats -->
                            </div>
                            <!-- /timeline -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>


@endsection
@section('script')
    @include('admin.shared.submitEditForm')
@endsection
