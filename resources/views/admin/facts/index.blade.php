@extends('admin.layouts.master')
@section('title')
    حقائق الشركه
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
                    class="icon-list-numbered"></i> <span>حقائق الشركه  : {{$facts->count()}} </span></button>
        </div>
    </div>
    <div style="overflow-x: scroll;">
        <table id="dtable" class="text-center table table-bordered table-lg">
            <thead>
            <tr style="background:#EEE">
                <td>الرقم</td>
                <td>العنوان</td>
                <td>الرقم </td>
                <td>الاعدادات</td>
            </tr>
            </thead>
            <tbody id="tableBody">
            @foreach($facts as $fact)
                <tr id="row-{{$fact->id}}">
                    <td data-id="{{ $fact->id }}">{{$fact->id}}</td>
                    <td>{{$fact->title}}</td>
                    <td>{{$fact->number}}</td>
                    <td >
                        <ul class="icons-list" >
                            <li  class="text-success-600">
                                <a href="#" data-toggle="modal" data-target="#exampleModal2" class="openEditmodal"
                                   data-id="{{$fact->id}}}"
                                   data-title="{{$fact->title}}"
                                   data-number="{{$fact->number}}"
                                >
                                    <i class="fa fa-2x fa-edit"></i>
                                </a>
                            </li>
                            <li  class="text-danger-600" >
                                <a class="delete-row bs-tooltip" data-url="{{ url('admin/facts/' . $fact->id) }}"     data-id="{{ $fact->id }}">
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
                    <form action="{{route('admin.facts.store')}}" method="POST" class="store" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>العنوان</label>
                                <input placeholder="العنوان" type="text" name="title" class="form-control">
                            </div>

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>الرقم</label>
                                <input placeholder="الرقم" type="number" name="number" class="form-control">
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
                    <form class="update" action="{{ route('admin.facts.update') }}"  enctype="multipart/form-data" method="POST">

                        <!-- token and user id -->
                        @csrf
                        <input required="" type="hidden" name="id" value="">
                        <!-- /token and user id -->
                        <div class="row">

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>العنوان</label>
                                <input placeholder="العنوان" type="text" name="title" class="form-control">
                            </div>

                            <div class="col-sm-12" style="margin-top: 10px">
                                <label>الرقم</label>
                                <input placeholder="الرقم" type="number" name="number" class="form-control">
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
        var number = $(this).data('number');


        //set values in modal inputs
        $("input[name='id']").val(id);
        $("input[name='title']").val(title);
        $("input[name='number']").val(number);
    })


</script>
@endsection
