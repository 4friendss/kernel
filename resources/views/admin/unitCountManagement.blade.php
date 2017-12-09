@extends('layouts.adminLayout')
@section('content')

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> مدیریت واحدهای شمارش و زیر واحد ها</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link" data-toggle="tooltip" title="جمع کردن"><i
                                        class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link" data-toggle="tooltip" title="بستن"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>


                <a href="{{url('addUnit')}}" id="user-send" type="button" class="col-md-2 col-md-offset-5 btn btn-info" style="font-weight: bold;">
                                        افزودن واحد شمارش جدید                </a>
                {{--<div class="pull-right" style="direction: rtl"><i class="fa fa-square" style="font-size: 35px;color:#ffff80;"></i> مدیران واحد</div>--}}
                <div class="x_content">
                    <table style="direction:rtl;text-align: center" id="example"
                           class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                        <thead>
                        <tr>
                            <th style="text-align: center">ردیف</th>
                            <th style="text-align: center"> عنوان واحد شمارش</th>
                            <th style="text-align: center">مشاهده زیر واحد</th>
                            <th style="text-align: center;border-right: 1px solid #d6d6c2">ویرایش</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $i = 0 ?>
                        @foreach($data as $datum)
                            {{--                            @if($val->unit_id!=3)--}}
                            <tr class="unit">
                                <td style="font-size: 120%;">{{++$i}}</td>
                                <td style="font-size: 120%;">{{$datum->title}}</td>
                                <td style="font-size: 120%;"><a class="btn btn-info"  href="{{url('editUnitCount')}}/{{$datum->id}}">ویرایش</a></td>
                                @if(count($datum->subUnits) > 0)
                                    <td style="font-size: 120%;"><a class="btn btn-dark col-md-5 col-md-offset-3" href="{{url('subUnitManagement')}}/{{$datum->id}}"> مشاهده و ویرایش زیر واحدها </a></td>
                                @endif
                                @if(count($datum->subUnits) == 0)
                                    <td style="font-size: 120%;"><a class="btn btn-danger col-md-5 col-md-offset-3">فاقد زیر واحد</a></td>
                                @endif
                            </tr>
                            {{--@endif--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        @endsection