@extends('admin.layouts.master')
@section('title')
    الرئيسيه
@stop
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
            <div class="card-content">
                <div class="card-body text-center">
                    <img src="{{asset('admin/assets/images/decore-left.png')}}" class="img-left" alt="card-img-left">
                    <img src="{{asset('admin/assets/images/decore-right.png')}}" class="img-right" alt="card-img-right">
                    <div class="text-center">
                        <h1 class="mb-2" style="color: black">مرحبا بك {{auth()->guard('admin')->user()->name}}</h1>
                        <p style="color: black" class="m-auto w-75">{{ \Carbon\Carbon::parse(now())->translatedFormat('l j F Y ') }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 weatherWidgetInner">
        <a class="weatherwidget-io"  href="https://forecast7.com/ar/24d7146d68/riyadh/" data-label_1="الرياض" data-label_2="الطقس" data-theme="pure" >Riyadh WEATHER</a>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="widget-heading" style="margin-top: 50px;">
            <h5  class="" style="text-align: center" >عدد زوار الموقع </h5>
        </div>

        <div style="overflow-x: scroll;">
            <table id="dtable" class="text-center table table-bordered table-lg">
                <thead>
                <tr style="background:#EEE">
                    <th><div style="text-align: center" class="th-content">التاريخ </div></th>
                    <th><div style="text-align: center" class="th-content">العدد</div></th>
                </tr>
                </thead>
                <tbody id="tableBody">
                @foreach($visitorsPerDay as $visitor)
                    <tr>
                        <td   style="text-align: center">
                            <span>{{$visitor->day .'/' . $visitor->month .'/' .$visitor->year}}</span>
                        </td>
                        <td><div class="td-content product-brand text-primary">{{$visitor->count . ' ' . 'زائر'}}</div></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@stop
@section('script')
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>

@stop
