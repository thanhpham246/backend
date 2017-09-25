@extends('frontend/master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                @if (isset($proNameType))
                    <h6 class="inner-title alert alert-success">Sản phẩm {{$proNameType->name}}</h6>
                @else
                    <h6 class="inner-title alert alert-success">Tất cả sản phẩm</h6>
                @endif
            </div>
            <div class="pull-right alert alert-warning">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('trang-chu')}}">Home</a> / <span class="text-primary">Sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($listType as $list)
                                <li><a href="{{route('danh-sach',$list->id)}}">{{$list->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">438 styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            @if ($listProduct)
                                <div class="row">
                                    @foreach($listProduct as $item)
                                        <div class="single-item col-sm-4" style="margin-bottom: 20px">
                                            <div class="ribbon-wrappers">
                                                @if($item->promotion_price > 0)
                                                    <div class="ribbon sale">Sale</div>
                                                @endif
                                            </div>
                                            <div class="single-item-header">
                                                <a href="{{route('chi-tiet-san-pham',$item->id)}}"><img src="source/image/product/{{$item->image}}" height="250px" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$item->name}}</p>
                                                <p class="single-item-price">
                                                    @if($item->promotion_price == 0)
                                                        <span>{{number_format($item->unit_price)}} đ</span>
                                                    @else
                                                        <span class="flash-del">{{number_format($item->unit_price)}} đ</span>
                                                        <span class="flash-sale">{{number_format($item->promotion_price)}} đ</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('them-gio-hang',$item->id)}}"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$item->id)}}">Details <i
                                                            class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                <div class="row">{{$listProduct->links()}}</div>
                            @else
                                <div class="row">
                                    <div class="col-sm-12 alert alert-warning">Không có sản phẩm nào</div>
                                </div>
                            @endif
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>
                        @if (isset($topProduct))
                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">438 styles found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($topProduct as $data)
                                        <div class="single-item col-sm-4" style="margin-bottom: 20px">
                                            <div class="ribbon-wrappers">
                                                @if($data->promotion_price > 0)
                                                    <div class="ribbon sale">Sale</div>
                                                @endif
                                            </div>
                                            <div class="single-item-header">
                                                <a href="{{route('chi-tiet-san-pham',$data->id)}}"><img src="source/image/product/{{$data->image}}" height="250px" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$data->name}}</p>
                                                <p class="single-item-price">
                                                    @if($data->promotion_price == 0)
                                                        <span>{{number_format($data->unit_price)}} đ</span>
                                                    @else
                                                        <span class="flash-del">{{number_format($data->unit_price)}} đ</span>
                                                        <span class="flash-sale">{{number_format($data->promotion_price)}} đ</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('them-gio-hang',$item->id)}}"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$data->id)}}">Details <i
                                                            class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="space40">&nbsp;</div>
                            </div> <!-- .beta-products-list -->
                        @endif
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection