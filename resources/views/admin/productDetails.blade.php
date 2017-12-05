@extends('layouts.adminLayout')
@section('content')
    <style>
        .star {
            color: #ff0000;
            float: right;
            padding-right: 4px;
            padding-left: 4px;
        }

        input, label {
            font-size: 15px;
        }

        .margin-1 {
            margin-top: 1%;
        }

        .margin-bot-1 {
            margin-bottom: 1%;
        }

        .overflow-x {
            overflow-x: hidden;
        }
    </style>
    <!-- Include SmartWizard CSS -->
    <link href="{{url('public/dashboard/stepWizard/css/smart_wizard.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Optional SmartWizard theme -->
    <link href="{{url('public/dashboard/stepWizard/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet"
          type="text/css"/>
    <div class="clearfix"></div>
    <div class="row">
        <div class="container">
            <form class="form-horizontal form-label-left" id="productForm" method="POST" enctype="multipart/form-data"
                  style="direction: rtl !important;">
                <!-- SmartWizard 1 html -->
                <div id="smartwizard">
                    <ul>
                        <li><a href="#step-1">اطلاعات اصلی محصول<br/>
                                <small><!-- This is step description --></small>
                            </a></li>
                        <li><a href="#step-2">اطلاعات تکمیلی محصول<br/>
                                <small></small>
                            </a></li>
                        <li><a href="#step-3">قیمت / تخفیف / پیک<br/>
                                <small></small>
                            </a></li>
                        <li><a href="#step-4">تصاویر / ویدئوی محصول<br/>
                                <small></small>
                            </a></li>
                    </ul>
                    @if(!empty($data))
                    <div>
                        <div id="step-1" class="">
                            <br>
                            <div class="container">
                                <br>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        <input disabled id="lastCategory" class="form-control col-md-12" name="lastCategory" value="{{$data[0]->categories[0]->title}}">

                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="title"> آخرین دسته مربوطه :
                                    </label>
                                </div>

                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        <input disabled id="title" class="form-control col-md-12 col-xs-12" name="title" type="text" value="{{$data[0]->title}}">
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="title"> عنوان محصول :

                                    </label>
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    {{--<div class="col-md-1" style="margin-left: 6.333333%;margin-right: 2%;"></div>--}}
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        <textarea  style="text-align: right; direction: ltr;" disabled id="description"  class="form-control col-md-12 col-xs-12 overflow-x"  name="description" required="required" >
                                            @if($data[0]->description != null)
                                                {{$data[0]->description}}
                                            @endif
                                            @if($data[0]->description == null)
                                                 توضیحی وجود ندارد
                                            @endif
                                        </textarea>
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="description"> توضیح
                                        محصول :
                                    </label>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->unit_count != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->unit_count}}">
                                        @endif
                                        @if($data[0]->unit_count == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="unit"> واحد شمارش :

                                    </label>
                                    @if ($errors->has('unit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 ">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->sub_unit_count != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->sub_unit_count}}">
                                        @endif
                                        @if($data[0]->sub_unit_count == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="subunit"> زیر واحد
                                        شمارش

                                    </label>
                                    @if ($errors->has('subunit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('subunit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 margin-bot-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->productFlags[0]->title  == 'price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{number_format($data[0]->productFlags[0]->price)}}">
                                        @endif
                                        @if($data[0]->productFlags[0]->title != 'price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="price"> قیمت اصلی
                                        (تومان) :

                                    </label>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="step-2" class="">
                            <div class="container">
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->produce_date != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->produce_date}}">
                                        @endif
                                        @if($data[0]->produce_date == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for=""> تاریخ
                                        تولید :

                                    </label>
                                    @if ($errors->has('produce_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('produce_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->expire_date != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->expire_date}}">
                                        @endif
                                        @if($data[0]->expire_date == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="expire_date"> تاریخ
                                        انقضا :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('expire_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('expire_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->produce_place != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->produce_place}}">
                                        @endif
                                        @if($data[0]->produce_place == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>

                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="produce_place"> محل
                                        تولید :

                                    </label>
                                    @if ($errors->has('produce_place'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('produce_place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->warehouse_count != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->warehouse_count}}">
                                        @endif
                                        @if($data[0]->warehouse_count == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="warehouse_count"> تعداد
                                        موجود در
                                        انبار :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('warehouse_count'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('warehouse_count') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 ">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->warehouse_place != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->warehouse_place}}">
                                        @endif
                                        @if($data[0]->warehouse_place == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="warehouse_place"> محل
                                        فیزیکی در
                                        انبار :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('warehouse_place'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('warehouse_place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->ready_time != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->ready_time}}">
                                        @endif
                                        @if($data[0]->ready_time == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="ready_time"> زمان آماده
                                        شدن بر حسب ساعت :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('ready_time'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ready_time') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 margin-bot-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->barcode != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->barcode}}">
                                        @endif
                                        @if($data[0]->barcode == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="barcode"> بارکد :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('barcode'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="step-3" class="">
                            <div class="container">
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->productFlags[0]->title == 'sales_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{number_format($data[0]->productFlags[0]->price)}}">
                                        @endif
                                        @if($data[0]->productFlags[0]->title != 'sales_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="sales_price"> قیمت حراج
                                        (تومان):
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('sales_price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sales_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->productFlags[0]->title == 'special_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{number_format($data[0]->productFlags[0]->price)}}">
                                        @endif
                                        @if($data[0]->productFlags[0]->title != 'special_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="special_price"> قیمت
                                        ویژه (تومان):
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('special_price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('special_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->productFlags[0]->title == 'wholesale_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{number_format($data[0]->productFlags[0]->price)}}">
                                        @endif
                                        @if($data[0]->productFlags[0]->title != 'wholesale_price')
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="wholesale_price"> قیمت
                                        عمده (تومان):
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('wholesale_price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('wholesale_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 margin-bot-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->discount_volume != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->discount_volume}}">
                                        @endif
                                        @if($data[0]->discount_volume == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="discount_volume">
                                        حجم/تعداد مشمول
                                        تخفیف :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('discount_volume'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('discount_volume') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 margin-bot-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->discount != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->discount}}">
                                        @endif
                                        @if($data[0]->discount == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="discount"> درصد تخفیف :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('discount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('discount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-10 col-md-offset-1 margin-1 margin-bot-1">
                                    <div class="col-md-7 col-sm-6 col-xs-9 col-md-offset-2">
                                        @if($data[0]->delivery_volume != null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id" value="{{$data[0]->delivery_volume}}">
                                        @endif
                                        @if($data[0]->delivery_volume == null)
                                            <input disabled id="unit" class="form-control col-md-7 col-xs-12" name="unit_count_id">
                                        @endif
                                    </div>
                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="delivery_volume">
                                        حجم/تعداد مشمول
                                        پیک رایگان :
                                        <span class="required star" title="پر کردن این فیلد الزامی است"></span>
                                    </label>
                                    @if ($errors->has('delivery_volume'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('delivery_volume') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div id="step-4" class="">
                            <div class="container">
                                <div id="addPic">
                                    @foreach($data[0]->productImages as $image)
                                    <div class="col-md-12 margin-1">

                                        <div class="col-md-1 col-sm-1 col-xs-1 col-md-offset-2">
                                            {{--<a id="addInput" class="glyphicon glyphicon-zoom-in btn btn-success"--}}
                                               {{--data-toggle=""--}}
                                               {{--title="بزرگ نمایی تصویر "></a>--}}
                                        </div>
                                        <div  class="col-md-5 col-sm-6 col-xs-9 ">
                                                <img class="image" style="height: 100px; width: 100px; margin-left: 80%;" src="{{url('public/dashboard/image')}}/{{$image->image_src}}" >
                                        </div>

                                        <label class="control-label col-md-2 col-sm-4 col-xs-3" for="pic"> تصویر محصول :
                                            <span class="required star"></span>
                                        </label>

                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-10 ">
                                    <hr>
                                </div>
                                <div class="col-md-12 margin-bot-1">
                                    <div class="col-md-5 col-sm-6 col-xs-9 col-md-offset-3">
                                        <input class="form-control col-md-12 col-xs-12"
                                               type="file" name="video_src" id="video_src"/>
                                    </div>

                                    <label class="control-label col-md-2 col-sm-4 col-xs-3" for="video_src"> ویدئوی
                                        محصول :
                                        <span class="required star"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endif
                </div>
                <br/>
            </form>
        </div>
        <!-- Include SmartWizard JavaScript source -->
        <script type="text/javascript"
                src="{{url('public/dashboard/stepWizard/js/jquery.smartWizard.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // Toolbar extra buttons
                var btnFinish = $('<button></button>').text('ثبت محصول')
                    .addClass('btn btn-info')
                    .on('click', function () {
                        var formData = new FormData($("#productForm")[0])
                        $.ajax({
                            url: '{{url('api/v1/addNewProduct')}}',
                            type: 'post',
                            cashe: false,
                            data: formData,
                            dataType: 'json',
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                var x = '';
                                $.each(data, function (key, val) {
                                    x += val + '\n'
                                });
                                swal({
                                    title: '',
                                    text: x,
                                    type: "info",
                                })
                            },
                            error: function (xhr) {
                                console.log(xhr)
                                swal({
                                    title: '',
                                    text: xhr,
                                    type: "info",
                                })
                            }
                        })
                    });
                var btnCancel = $('<button></button>').text('شروع مجدد')
                    .addClass('btn btn-danger')
                    .on('click', function () {
                        $('#smartwizard').smartWizard("reset");
                        $('#productForm')[0].reset();

                    });

                $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect: 'fade',
                    showStepURLhash: false,
                    toolbarSettings: {
                        toolbarPosition: 'bottom',
                        toolbarExtraButtons: [btnFinish, btnCancel]
                    }
                });
                // External Button Events
                $("#reset-btn").on("click", function () {
                    // Reset wizard
                    $('#smartwizard').smartWizard("reset");
                    return true;
                });

                $("#prev-btn").on("click", function () {
                    // Navigate previous
                    $('#smartwizard').smartWizard("قبلی");
                    return true;
                });

                $("#next-btn").on("click", function () {
                    // Navigate next
                    $('#smartwizard').smartWizard("بعدی");
                    return true;
                });
                $(".sw-btn-next").text('بعدی');
                $(".sw-btn-prev").text('قبلی');
//
            });
        </script>
        <!-- send product form -->
        <script>
            $(document).ready(function () {
                //add input type file for add pic for product
                var counter = 0
                $('#addInput').on('click', function () {
                    if (counter < 3) {
                        $('#addPic').append
                        (
                            '<div class="col-md-12 margin-1">' +
                            '<div class="col-md-5 col-sm-6 col-xs-9 col-md-offset-3">' +
                            '<input class="form-control col-md-12 col-xs-12" type="file" name="pic[]" id="pic"/>' +
                            '</div>' +
                            '<label class="control-label col-md-2 col-sm-4 col-xs-3" for="pic"> تصویر محصول :' +
                            '<span class="required star"></span>' +
                            '</label></div>'
                        );
                        counter++;
                    }
                    else {
                    }
                })
       </script>

        <script>
            $(document).ready( function() {
                $('.image').hover(
                    function() {
                        $(this).animate({ 'zoom': 1.4 }, 400);
                    },
                    function() {
                        $(this).animate({ 'zoom': 1 }, 400);
                    });
            });
        </script>
@endsection
