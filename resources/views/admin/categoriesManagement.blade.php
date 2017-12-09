@extends('layouts.adminLayout')
@section('content')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" dir="rtl">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">نمایش تصویر دسته</h2>
                </div>
                <div class="modal-body">
                            <img class="image" id="editable"
                                 style=" height: 350px; width: 350px; margin-left: 80%;"
                                 src="{{url('public/dashboard/image')}}/{{$categories[0]->image_src}}">
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-dark col-md-6 col-md-offset-3" data-dismiss="modal">بستن</button>
                </div>
            </div>

        </div>
    </div>




    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> مدیریت دسته بندی ها</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link" data-toggle="tooltip" title="جمع کردن"><i
                                        class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link" data-toggle="tooltip" title="بستن"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>


                <a href="{{url('addCategory')}}" id="user-send" type="button" class="col-md-2 col-md-offset-5 btn btn-info" style=" font-weight: bold;">
                    <i class="fa fa-th-list"></i>                    افزودن دسته ی جدید                </a>
                {{--<div class="pull-right" style="direction: rtl"><i class="fa fa-square" style="font-size: 35px;color:#ffff80;"></i> مدیران واحد</div>--}}
                <div class="x_content">
                    <table style="direction:rtl;text-align: center" id="example"
                           class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                        <thead>
                        <tr>
                            <th style="text-align: center">ردیف</th>
                            <th style="text-align: center">عنوان دسته</th>
                            <th style="text-align: center">سطح دسته</th>
                            <th style="text-align: center">تصویر</th>
                            <th style="text-align: center;border-right: 1px solid #d6d6c2">ویرایش</th>
                            <th  style="text-align: center;border-right: 1px solid #d6d6c2;">مشاهده زیر دسته</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $i = 0 ?>
                        @foreach($categories as $category)
                            <tr class="unit">
                                <td style="font-size: 120%">{{++$i}}</td>
                                <td style="font-size: 120%">{{$category->title}}</td>
                                <td style="font-size: 120%">{{$category->depth}}</td>
                                @if($category->image_src == null)
                                    <td style="font-size: 120%">تصویر ندارد</td>
                                @endif
                                @if($category->image_src != null)
                                    <td><button class="btn btn-basic" id="showPicture">مشاهده تصویر</button></td>
                                @endif
                                <td><strong><a class="btn btn-info"   href="{{url('editCategory/'.$category->id)}}">ویرایش</a></strong> </td>
                                @if($category->depth > 0)
                                    <td><a  class="btn btn-dark" href="{{url('showSubCategory/'.$category->id)}}">مشاهده زیر دسته</a></td>
                                @endif
                                @if($category->depth == 0)
                                    <td><a  class="btn btn-danger" >فاقد زیر دسته</a></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            $(document).on('click','#showPicture',function(){
                $('#myModal').modal('show');
            })
        </script>
        @endsection