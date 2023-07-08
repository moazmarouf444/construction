@extends('admin.layouts.master')
@section('title')
    الرسائل
@endsection
@section('content')
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12">
            <button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i
                    class="icon-list-numbered"></i> <span>الرسائل  : {{$contacts->count()}} </span></button>
        </div>
    </div>
    <div style="overflow-x: scroll;">
        <table id="dtable" class="text-center table table-bordered table-lg">
            <thead>
            <tr style="background:#EEE">
                <th>رقم الرساله</th>
                <th>الاسم</th>
                <th>الهاتف</th>
                <th>البريد الالكتروني</th>
                <th>الرساله</th>
                <th>التاريخ</th>
                <td>الاعدادات</td>
            </tr>
            </thead>
            <tbody id="tableBody">
            @foreach($contacts as $contact)
                <tr id="row-{{$contact->id}}">
                    <td> {{ $i++ }} </td>
                    <td>{{$contact->name}}</td>
                    <td> {{$contact->phone}} </td>
                    <td> {{$contact->email}} </td>
                    <td> {{$contact->message}} </td>
                    <td> {{ $contact->created_at->diffForHumans() ?? '' }} </td>
                    <td >
                        <ul class="icons-list" >
                            <li style="left: 40px" class="text-danger-600" >
                                <a class="delete-row bs-tooltip" data-url="{{ url('admin/contacts/' . $contact->id) }}"     data-id="{{ $contact->id }}">
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

@endsection

@section('script')
    @include('admin.shared.deleteOne')
    @include('admin.shared.deleteAll')
@endsection
