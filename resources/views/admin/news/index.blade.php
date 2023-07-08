@extends('admin.layouts.master')
@section('title')
    جديد الشركه
@endsection
@section('style')
    @include('admin.shared.image_breview_style')
@stop

@section('content')
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-6">
            <button class="btn bg-blue btn-block btn-float btn-float-lg" data-toggle="modal"
                    data-target="#exampleModal3" type="button" data-toggle="modal" data-target="#exampleModal"><i
                    class="icon-plus3"></i> <span>اضافه</span></button>
        </div>
        <div class="col-xs-6">
            <button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i
                    class="icon-list-numbered"></i> <span>جديد الشركه  : {{$news->count()}} </span></button>
        </div>
    </div>
    <div style="overflow-x: scroll;">
        <table id="dtable" class="text-center table table-bordered table-lg">
            <thead>
            <tr style="background:#EEE">
                <td>الرقم</td>
                <td>العنوان</td>
                <td>الوصف</td>
                <td>الصوره</td>
                <td>الاعدادات</td>
            </tr>
            </thead>
            <tbody id="tableBody">
            @foreach($news as $new)
                <tr id="row-{{$new->id}}">
                    <td data-id="{{ $new->id }}">{{$new->id}}</td>
                    <td>{{$new->title}}</td>
                    <td>{{Str::limit($new->description, 15)}}</td>
                    <td><img src="{{$new->image}}" width="50px" height="50px" alt=""></td>

                    <td>
                        <ul class="icons-list">
                            <li class="text-success-600">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="openEditmodal"
                                   data-id="{{$new->id}}}"
                                   data-title="{{$new->title}}"
                                   data-description="{{$new->description}}"
                                   data-image="{{$new->image}}"
                                >
                                    <i class="fa fa-2x fa-edit"></i>
                                </a>
                            </li>
                            <li class="text-danger-600">
                                <a  class="delete-row bs-tooltip" data-url="{{ url('admin/new-company/' . $new->id) }}"
                                   data-id="{{ $new->id }}">
                                    <i class="fa fa-2x fa-minus-square-o"></i>
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add model  -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> اضافه جديد : <span class="userName"></span></h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.new.company.store')}}" method="POST" class="store"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>العنوان</label>
                                <input placeholder="العنوان" type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group" style="padding-top: 20px; margin-bottom: 20px;">
                                <div class="col-xs-12">
                                    <label for=""> الوصف </label>
                                    <div class="input-group">
                                        <textarea id="description"
                                                  style="{{$errors->has('about_ar') ? 'border-bottom:1px solid red;' : ''}}"
                                                  rows="5" width="100%" name="description"
                                                  class="form-control"></textarea>
                                        <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="form-group" style="padding-top: 20px; margin-bottom: 20px;">
                                <h3  style="text-align: center;"> الصوره </h3>

                                <div class="col-12 upload_imgone">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin-top: 10px">
                                <button type="submit" id="sub" class="btn btn-primary">اضافه</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit model  -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> تعديل : <span class="userName"></span></h5>
                </div>
                <div class="modal-body">
                    <form class="update" action="{{ route('admin.new.company.update') }}" enctype="multipart/form-data"
                          method="POST">

                        <!-- token and user id -->
                        @csrf
                        <input required="" type="hidden" name="id" value="">
                        <!-- /token and user id -->
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>العنوان</label>
                                <input placeholder="العنوان" type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group" style="padding-top: 20px">
                                <div class="col-xs-12">
                                    <label for=""> الوصف </label>
                                    <div class="input-group">
                                        <textarea id="description"
                                                  style="{{$errors->has('about_ar') ? 'border-bottom:1px solid red;' : ''}}"
                                                  rows="5" width="100%" name="description"
                                                  class="form-control"></textarea>
                                        <span class="input-group-addon bg-primary"><i class="icon-help"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin-top: 10px">
                                <h3 style="text-align: center">الصوره</h3>
                                <div class="upload_imgone">
                                    <input type="file" name="image">
                                    <i class="ft-plus"></i>
                                    <div class="uploaded-block">
                                        <img src="" id="image">
                                        <span class="close">x</span></div>
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin-top: 10px">
                                <button type="submit" id="editbtn" class="btn btn-primary">تعديل</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- add question script-->

    @include('admin.shared.submitAddForm')
    <!-- end add question script-->


    <!--edit script-->

    @include('admin.shared.submitEditForm')

    <!-- end edit script-->
    <!--edit script-->

    @include('admin.shared.deleteOne')

    <!-- end edit script-->

    <script>
        $(document).on('click', '.openEditmodal', function () {
            //get valus
            var id = $(this).data('id');
            var title = $(this).data('title');
            var description = $(this).data('description');
            var image = $(this).data('image');


            //set values in modal inputs
            $("input[name='id']").val(id);
            $("input[name='title']").val(title);
            $("textarea[name='description']").val(description);
            $("#image").attr('src', image);
        })


    </script>
    @include('admin.shared.image_breview_script')

@endsection
