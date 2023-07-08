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
    المقدمه
@endsection
@section('content')
    <!-- Bordered tab content -->
    <div class="row">
        <div class="col-md-12">
            <form  class="update" enctype="multipart/form-data" action="{{ route('admin.introductions.update') }}" method="POST">
                @csrf

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">المقدمه</h6>
                    </div>

                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane has-padding active " id="bordered-tab174">
                                <div class="form-group"  style="padding-top: 20px">
                                    <div class="col-xs-12">
                                        <label for="">العنوان الرئيسي  </label>
                                        <div class="input-group">
                                            <input style="{{$errors->has('main_title') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{$introduction->main_title}}" name="main_title" type="text" class="form-control" placeholder="قم بادخال المطلوب">
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="">العنوان الفرعي   </label>
                                        <div class="input-group">
                                            <input style="{{$errors->has('sub_title') ? 'border-bottom:1px solid red;' : ''}}" width="100%" value="{{$introduction->sub_title}}" name="sub_title" type="text" class="form-control" placeholder="قم بادخال المطلوب">
                                            <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                        </div>
                                    </div>

                                    <div class="form-group"  style="padding-top: 20px">
                                        <div class="col-xs-12">
                                            <label for=""> الوصف    </label>
                                            <div class="input-group">
                                                <textarea id="about_ar" style="{{$errors->has('about_ar') ? 'border-bottom:1px solid red;' : ''}}" rows="5" width="100%" name="description" class="form-control" >{{$introduction->description}}</textarea>
                                                <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;float: left">
                        <button  id="editbtn" type="submit" class="btn bg-primary" style="width:100px;">تعديل</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.7.1/basic/ckeditor.js"></script>
    @section('script')
        @include('admin.shared.submitEditForm')

    @endsection

@endsection
