@extends('frontend/master')
@section('content')
<div class="rev-slider">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        @foreach($slide as $sl)
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                     data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                     data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                     data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                     data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                     data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                         data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                         src="source/image/slide/{{$sl->image}}"
                                         data-src="source/image/slide/{{$sl->image}}"
                                         style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">total {{count($listProduct)}} products</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                        @foreach($listProduct as $key => $item)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="ribbon-wrapper">
                                        @if($item->promotion_price > 0)
                                        <div class="ribbon sale">Sale</div>
                                        @endif
                                    </div>
                                    <div class="single-item-header">
                                        <a href="{{route('chi-tiet-san-pham',$item->id)}}"><img src="source/image/product/{{$item->image}}" height="250" alt=""></a>
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
                            </div>
                        @endforeach
                        </div>
                        <div class="row">{{$listProduct->links()}}</div>
                    </div> <!-- .beta-products-list -->
                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Products Sale</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">total {{count($productSale)}} products</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                        @foreach($productSale as $k => $pro)

                            <div class="single-item col-sm-3" style="margin-bottom: 20px">
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>

                                <div class="single-item-header">
                                    <a href="{{route('chi-tiet-san-pham',$pro->id)}}"><img src="source/image/product/{{$pro->image}}" height="250px" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$pro->name}}</p>
                                    <p class="single-item-price">
                                        @if($pro->promotion_price == 0)
                                            <span>{{number_format($pro->unit_price)}} đ</span>
                                        @else
                                            <span class="flash-del">{{number_format($pro->unit_price)}} đ</span>
                                            <span class="flash-sale">{{number_format($pro->promotion_price)}} đ</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{route('them-gio-hang',$pro->id)}}"><i
                                                class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$pro->id)}}">Details <i
                                                class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        @endforeach
                        </div>
                        <div class="space40">&nbsp;</div>
                        <div class="row">{{$productSale->links()}}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div>
    @endsection