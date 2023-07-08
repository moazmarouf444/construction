@extends('admin.layouts.master')
<style>
    .images img{
        width: 40px !important;
        height: 40px !important;
        margin: 5px;
    }
    .images a img{
        width: 40px !important;
        height: 40px !important;
        margin: 5px;
    }
    .showInp{
        width: 100%;
        height: 32px;
        border:1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
    }
    .upload-img{
        position: relative;
    }
    .hideInp{
        position: absolute;
        top: 0;
        width: 100%;
        height: 32px;
        opacity: 0;
        z-index: 99;
    }

</style>
@section('title')
    الاعدادات الرئيسيه
@endsection
@section('content')
    <!-- Bordered tab content -->
    <div class="row">
        <div class="col-md-12">
            <form  class="update" action="{{ route('admin.settings.update') }}"  enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">الاعدادات الرئيسيه</h6>
                    </div>

                    <div class="panel-body">
                        <div class="tabbable tab-content-bordered">
                            <ul class="nav nav-tabs nav-tabs-highlight">
                                <li class="active"><a href="#bordered-tab174" data-toggle="tab">الرئيسية</a></li>
                                <li><a href="#bordered-tab3" data-toggle="tab"> عن الموقع</a></li>
                                <li><a href="#bordered-tab7" data-toggle="tab"> الشروط والاحكام </a></li>
                                <li><a href="#bordered-tab8" data-toggle="tab"> تواصل معنا </a></li>
                            </ul>

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane has-padding active " id="bordered-tab174">
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">اسم التطبيق  </label>
                                        <div class="input-group">
                                            <input style="{{$errors->has('site_name') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{$settings['site_name']}}" name="site_name" type="text" class="form-control" placeholder="قم بادخال المطلوب">
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('site_name') ? '*' . $errors->first('site_name') : ''}}</p>
                                </div>

                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">الفديو التعريفي   </label>
                                        <div class="input-group">
                                            <input style="{{$errors->has('video') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{$settings['video']}}" name="video" type="url" class="form-control" placeholder="قم بادخال المطلوب">
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('video') ? '*' . $errors->first('video') : ''}}</p>
                                </div>

                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <div class="gallery">
                                            <div class="images">
                                                <a data-fancybox="gallery" href="{{URL::to('assets/uploads/images/settings/'.$settings['logo_header'])}}">
                                                    <img src="{{URL::to('assets/uploads/images/settings/'.$settings['logo_header'])}}">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <div class="img-block">
                                                <div class="upload-img">
                                                    <input class="heddenUploud hideInp" type="file" multiple="" id="gallery-photo-add" name="logo_header">
                                                    <input type="text" class="showInp" placeholder="ارفق لوجو هيدر التطبيق">
                                                </div>
                                            </div>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('logo_header') ? '*' . $errors->first('logo_header') : ''}}</p>
                                </div>
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <div class="gallery1">
                                            <div class="images">
                                                <a data-fancybox="gallery" href="{{URL::to('assets/uploads/images/settings/'.$settings['logo_footer'])}}">
                                                    <img src="{{URL::to('assets/uploads/images//settings/'.$settings['logo_footer'])}}">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <div class="img-block">
                                                <div class="upload-img">
                                                    <input class="heddenUploud1 hideInp" type="file" multiple="" id="gallery-photo-add1" name="logo_footer">
                                                    <input type="text" class="showInp" placeholder="ارفق لوجو فوتر التطبيق">
                                                </div>
                                            </div>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('logo_footer') ? '*' . $errors->first('logo_footer') : ''}}</p>
                                </div>

                            </div>
                            <div class="tab-pane has-padding" id="bordered-tab3" >
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> عن الموقع    </label>
                                        <div class="input-group">
                                            <textarea id="about" style="{{$errors->has('about') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="about" class="form-control" >{{$settings['about']}}</textarea>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('about') ? '*' . $errors->first('about') : ''}}</p>
                                </div>

                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> خدمات الشركه    </label>
                                        <div class="input-group">
                                            <textarea id="services" style="{{$errors->has('about') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="services" class="form-control" >{{$settings['services']}}</textarea>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('services') ? '*' . $errors->first('services') : ''}}</p>
                                </div>
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> التخصصات    </label>
                                        <div class="input-group">
                                            <textarea id="majors" style="{{$errors->has('about') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="majors" class="form-control" >{{$settings['majors']}}</textarea>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('majors') ? '*' . $errors->first('majors') : ''}}</p>
                                </div>
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> المهارات </label>
                                        <div class="input-group">
                                            <textarea id="skills" style="{{$errors->has('about') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="skills" class="form-control" >{{$settings['skills']}}</textarea>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('skills') ? '*' . $errors->first('skills') : ''}}</p>
                                </div>

                            </div>
                            <div class="tab-pane has-padding" id="bordered-tab7" >
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> الشروط والاحكام بالعربيه   </label>
                                        <div class="input-group">
                                            <textarea id="condition" style="{{$errors->has('condition_ar') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="condition" class="form-control" >{{$settings['condition']}}</textarea>
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('condition') ? '*' . $errors->first('condition') : ''}}</p>
                                </div>


                            </div>
                            <div class="tab-pane has-padding" id="bordered-tab8" >
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">رقم الهاتف   </label>
                                        <div class="input-group">
                                            <input placeholder="قم بادخال المطلوب" id="site_phone"  type="number" style="{{$errors->has('phone') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="site_phone" value="{{$settings['site_phone']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('site_phone') ? '*' . $errors->first('site_phone') : ''}}</p>
                                </div>


                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for=""> البريد الالكترونى   </label>

                                        <div class="input-group">
                                            <input placeholder="قم بادخال المطلوب" id="email" style="{{$errors->has('email') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="email" value="{{$settings['email']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('email') ? '*' . $errors->first('email') : ''}}</p>
                                </div>


                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">instagram</label>
                                        <div class="input-group">
                                            <input placeholder="قم بادخال المطلوب" id="instagram" style="{{$errors->has('instagram') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="instagram" value="{{$settings['instagram']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('instagram') ? '*' . $errors->first('instagram') : ''}}</p>
                                </div>
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">facebook</label>
                                        <div class="input-group">
                                            <input placeholder="قم بادخال المطلوب" id="facebook" style="{{$errors->has('instagram') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="facebook" value="{{$settings['facebook']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('facebook') ? '*' . $errors->first('facebook') : ''}}</p>
                                </div>
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">whatsapp</label>
                                        <div class="input-group">
                                            <input placeholder="قم بادخال المطلوب" id="facebook" style="{{$errors->has('instagram') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="whatsapp" value="{{$settings['whatsapp']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('whatsapp') ? '*' . $errors->first('whatsapp') : ''}}</p>
                                </div>

                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">youtube</label>
                                        <div class="input-group">
                                            <input type="url" placeholder="قم بادخال المطلوب" id="youtube" style="{{$errors->has('instagram') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="youtube" value="{{$settings['youtube']}}" class="form-control" >
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <p style="color: red">{{$errors->has('youtube') ? '*' . $errors->first('youtube') : ''}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <input type="hidden" name="id" value="">
                    <div class="form-group" style="text-align: center;float: left">
                        <button id="editbtn" type="submit" class="btn bg-primary" style="width:100px;">تعديل</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>


    @include('admin.shared.submitEditForm')

@endsection
