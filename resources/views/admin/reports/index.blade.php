@extends('admin.layouts.master')
@section('title')
    التقارير
@endsection
@section('content')
    <div class="row" style="margin-bottom:20px;">
        <div class="col-xs-12">
            <button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i
                    class="icon-list-numbered"></i> <span>التقارير  : {{$reports->count()}} </span></button>
        </div>
    </div>
    <div style="overflow-x: scroll;">
        <table id="dtable" class="text-center table table-bordered table-lg">
            <thead>
            <tr style="background:#EEE">
                <th>ارقام التقارير</th>
                <th>تاريخ التقرير</th>
                <th>منشء التقرير</th>
                <th>التقرير</th>
                <td>الاعدادات</td>
            </tr>
            </thead>
            <tbody id="tableBody">
            @foreach($reports as $report)
                <tr id="row-{{$report->id}}">
                    <td> {{ $i++ }} </td>
                    <td> {{ $report->created_at }} </td>
                    <td> {{$report->admin->name ??  ''}} </td>
                    <td>{{ $report->msg }}</td>
                    <td >
                        <ul class="icons-list" >
                            <li style="left: 40px" class="text-danger-600" >
                                <a class="delete-row bs-tooltip" data-url="{{ url('admin/reports/' . $report->id) }}"     data-id="{{ $report->id }}">
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

    <!-- end edit script-->

@endsection
