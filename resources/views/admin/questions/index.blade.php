@extends('admin.layouts.master')
@section('title')
    الاسئله الشائعه
@endsection
@section('content')
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-6">
            <button class="btn bg-blue btn-block btn-float btn-float-lg" data-toggle="modal"
                    data-target="#exampleModal3" type="button" data-toggle="modal" data-target="#exampleModal"><i
                    class="icon-plus3"></i> <span>اضافه</span></button>
        </div>
        <div class="col-xs-6">
            <button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i
                    class="icon-list-numbered"></i> <span>الاسئله الشائعه  : {{$questions->count()}} </span></button>
        </div>
    </div>
    <div style="overflow-x: scroll;">
        <table id="dtable" class="text-center table table-bordered table-lg">
            <thead>
            <tr style="background:#EEE">
                <td>الرقم</td>
                <td>السؤال</td>
                <td>الاعدادات</td>
            </tr>
            </thead>
            <tbody id="tableBody">
            @foreach($questions as $question)
                <tr id="row-{{$question->id}}">
                    <td data-id="{{ $question->id }}">{{$question->id}}</td>
                    <td>{{$question->question}}</td>
                    <td >
                        <ul class="icons-list" >
                            <li style="left: 100px" class="text-success-600">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="openEditmodal"
                                   data-id="{{$question->id}}}"
                                   data-question="{{$question->question}}"
                                >
                                    <i class="fa fa-2x fa-edit"></i>
                                </a>
                            </li>
                            <li style="left: 100px" class="text-danger-600" >
                                <a class="delete-row bs-tooltip" data-url="{{ url('admin/common-questions/' . $question->id) }}"     data-id="{{ $question->id }}">
                                    <i  class="fa fa-2x fa-minus-square-o"></i>
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
                    <form action="{{route('admin.questions.store')}}" method="POST" class="store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>السؤال</label>
                                <input placeholder="السؤال" type="text" name="question" class="form-control">
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
                    <form class="update" action="{{ route('admin.questions.update') }}"  enctype="multipart/form-data" method="POST">

                        <!-- token and user id -->
                        @csrf
                        <input required="" type="hidden" name="id" value="">
                        <!-- /token and user id -->
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>السؤال</label>
                                <input   required="" placeholder="السؤال" type="text" name="question" class="form-control">
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
        var question = $(this).data('question');


        //set values in modal inputs
        $("input[name='id']").val(id);
        $("input[name='question']").val(question);
    })


</script>
@endsection
