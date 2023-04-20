@extends($theme.'.shop_layout', ["title" => $product->name,"header"=>["description" => $description, "keyword" => $keyword, "og_image" => $og_image]])
@push('style')
<link href="{{asset('css/guest/product/detail.css')}}" rel="stylesheet" type="text/css" />
<style>
    .tabs {
        /* max-width: 538px; */
    }

    .tabs ul{
        list-style: none;
    }

    .tabs-nav li {
        float: left;
        width: 50%;
    }

    .tabs-nav li:first-child a {
        border-right: 0;
        border-top-left-radius: 6px;
    }

    .tabs-nav li:last-child a {
        border-top-right-radius: 6px;
    }

    .tabs .tabs-nav a {
        background: #eaeaed;
        border: 1px solid #cecfd5;
        color: #0087cc;
        display: block;
        font-weight: 600;
        padding: 10px 0;
        text-align: center;
        text-decoration: none;
    }

    .tabs a:hover {
        color: #ff7b29;
    }

    .tabs .tab-active a {
        background: #fff;
        border-bottom-color: transparent;
        color: #e13475;
        cursor: default;
    }

    .tabs .tabs-stage {
        border: 1px solid #cecfd5;
        border-radius: 0 0 6px 6px;
        border-top: 0;
        clear: both;
        padding: 24px 30px;
        position: relative;
        top: -1px;
    }
</style>
@endpush
@section("content")

<div class="product-detail-page">
    <div class="container">
        <div class="product-info">
            <div class="row row-small">
                <div class="col-md-4 product-thumb">
                    <img src="{{ asset('documents/website/'.$product->image) }}" alt="{{$product->name}}" style=" margin-bottom: 5px;" />
                    <!-- @if ($product->price != $product->getPrice())
                        <div class="badge-container absolute left top z-1" style="z-index: 6 !important;">
                            <div class="callout badge badge-square">
                                <div class="badge-inner secondary on-sale"><span class="onsale">
                                    {{number_format(round(($product->price - $product->getPrice())*100)/$product->price)}} %
                                </span></div>
                            </div>
                        </div>
                    @endif -->        
                    <br/>
                    @if ($product->youtube_url)
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{$product->youtube_url}}" title="{{$product->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                </div>
                <div class="col-md-5 product-thumb">
                    <!-- <div class="breadcrumb">
                            <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{url('/')}}">Trang chủ</a>
                                <span class="divider">/</span> <a href="#">{{$product->name}} </a></nav>
                        </div> -->
                    <div class="product-title">
                        <h1>
                            @if(app()->getLocale()=="vi")
                                {{$product->name}}
                            @elseif(app()->getLocale()=="en")
                                {{$product->name_en}}
                            @endif
                        </h1>
                    </div>
                    @if($product->brand)
                    <!-- <div class="product-sub-info">
                        <span style="color: #1dab25">{{__('guest.brand')}}:</span> <span>
                            <a style="text-decoration: none;" 
                            href="{{ url('brands/'.ktc_str_convert($product->brand->name).'_'.$product->brand->id.'/.html') }}">
                            {{$product->brand && $product->brand->name ? $product->brand->name : "" }}
                            </a>
                        </span>
                    </div> -->
                    @endif
                    <div class="product-price">

                        <p class="special-price"> <span class="price-label"></span> <span class="price"> {!!$product->price_alternative && $product->getPrice()==0 ? $product->price_alternative.'</span>' : number_format($product->getPrice(),0,0,".").'</span><span class="vnd">đ</span>' !!} </p>
                        
                    </div>
                    <div class="product-description">
                        {{$product->description}}
                        @if ($product->capacity)
                        <div class="sub-info">
                            <span>{{__('product_detail.capacity')}}:</span> {{$product->capacity}}
                        </div>
                        @endif
                        @if ($product->skin_form)
                        <div class="sub-info">
                            <span>{{__('product_detail.skin_type')}}:</span> {{$product->skin_form}}
                        </div>
                        @endif
                        @if ($product->product_form)
                        <div class="sub-info">
                            <span>{{__('product_detail.product_form')}}:</span> {{$product->skin_form}}
                        </div>
                        @endif
                        @if ($product->origin)
                        <div class="sub-info">
                            <span>{{__('product_detail.origin')}}:</span> <strong>{{$product->origin}}</strong>
                        </div>
                        @endif
                        @if ($product->weight)
                        <div class="sub-info">
                            <span>{{__('product_detail.weight')}}:</span> {{$product->weight}}
                        </div>
                        @endif
                        @if ($product->size)
                        <div class="sub-info">
                            <span>{{__('product_detail.size')}}:</span> {{$product->size}}
                        </div>
                        @endif
                        <div class="sub-info">
                        <p class="availability in-stock ">Trạng thái: {!! (true)?'<span style="padding: 3px 5px; background: green; color: white; border-radius: 10px;">Mở đăng ký</span>':'<span style="padding: 3px 5px; background: red; color: white; border-radius: 10px;">Đóng đăng ký</span>' !!}
                        </p>
                        </div>
               <!-- {!! ($product->stock)?'<span style="color:green">Còn hàng</span>':'<span style="color:#f91010">Hết hàng</span>' !!}  -->
                
                    </div>


                    @if ($product->special_promotion)
                    <div class="product-promotion-description">
                        <h4>{{__('product_detail.hot')}}:</h4>
                        <div>
                        {!!$product->special_promotion!!}
                        </div>
                    </div>
                        @endif
                    <div class="thong-bao">
                        <ul>
                            <li>Kiến thức trọng tâm – mô phỏng – bám sát</li>
                            <li>Lượng giá kiến thức đầy đủ </li>
                            <li>Khóa học online mở liên tục</li> 
                            <li>Đăng kí liên hệ đội ngũ admin qua Zalo 0336644727</li>

                        </ul>
                    </div>
                    <form id="product-form" action="{{ action('Shop@cart') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />

                        <div class="flex-row product-cart">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="flex-col product-quantity">
                                <button class="plus-btn" type="button" name="button" value="+">
                                    <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                                </button>
                                <input name="product_id" type="hidden" value="{{$product->id}}">
                                <input type="text" id="product-quantity-input" name="qty" value="1">
                                <button class="minus-btn" type="button" name="button" value="-">
                                    <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                                </button>
                            </div>
                            <div class="flex-col">
                                <button type="submit" id="addToCart" class="button add-to-cart">
                                {{__('product_detail.add_to_cart')}}
                                </button>
                            </div>
                        </div>
                        <div class="order-action">
                            <a class="button order-now" onClick="$('#product-form').submit()">
                                <strong> {{__('product_detail.order_now')}}</strong>
                                <span> {{__('product_detail.we_will_reply_soon')}}</span>
                            </a>
                        </div>
                    </form>
                    <div class="product-category">
                    </div>

                </div>
                <div class="col-md-3 product-thumb">
                    <div id="product-sidebar" class="col large-3 hide-for-medium ">
                        <aside id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                <div class="info-prod prod-price freeship"><span class="title">Đăng ký nhanh chóng</span><br> 
                                <span class="title">Lịch học cụ thể</span><br> 
                                <span class="title">Kiến thức đầy đủ </span></div>
                            </div>
                        </aside>
                        <!-- <aside id="media_image-2" class="widget widget_media_image"><img width="225" height="300" 
                        src="http://mypham13.giaodienwebmau.com/wp-content/uploads/2020/07/Mặt-Nạ-Mắt-Trà-Xanh-JayJun-Green-Tea-Eye-Gel-Patch-225x300.gif" 
                        class="image wp-image-286  attachment-medium size-medium wp-post-image" alt="" style="max-width: 100%; height: auto;" 
                        srcset="http://mypham13.giaodienwebmau.com/wp-content/uploads/2020/07/Mặt-Nạ-Mắt-Trà-Xanh-JayJun-Green-Tea-Eye-Gel-Patch-225x300.gif 225w, http://mypham13.giaodienwebmau.com/wp-content/uploads/2020/07/Mặt-Nạ-Mắt-Trà-Xanh-JayJun-Green-Tea-Eye-Gel-Patch-300x400.gif 300w" sizes="(max-width: 225px) 100vw, 225px"></aside> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="product-content">
            <div class="tabs">
                <ul class="tabs-nav">
                    <li><a href="#tab-1"> {{__('product_detail.description')}}</a></li>
                    <li><a href="#tab-2"> Thông tin liên hệ</a></li>
                </ul>
                <div class="tabs-stage">
                    <div id="tab-1">
                        <div class="description">
                            <p><strong>
                            @if(app()->getLocale()=="vi")
                                {!!$product->description!!}  
                            @elseif(app()->getLocale()=="en")
                                {!!$product->description_en!!}  
                            @endif
                        </strong></p>
                        </div>
                                @if (isset($newsListRelated) && count($newsListRelated) > 0)
                                    <div class="realated-news">
                                        <ul>
                                            @foreach($newsListRelated as $news)
                                            <li><a href="{{url('/tin-tuc/'.$news->slug)}}">{{$news->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @else
                                @endif
                        <div class="row">
                            <div class="col-md-9">
                                <div class="entry-content single-page">

                                      
                            @if(app()->getLocale()=="vi")
                                {!!$product->content!!}  
                            @elseif(app()->getLocale()=="en")
                                {!!$product->content_en!!}  
                            @endif

                                    <div class="blog-share text-center">
                                        <div class="is-divider medium"></div>
                                        <div class="social-icons share-icons share-row relative"><a href="whatsapp://send?text=%E2%80%9CN%C3%B3ng%20tr%C6%B0%E1%BB%9Bc%20l%E1%BA%A1nh%20sau%E2%80%9D%20%26%238211%3B%20b%C3%AD%20k%C3%ADp%20r%E1%BB%ADa%20m%E1%BA%B7t%20ch%E1%BB%91ng%20l%C3%A3o%20h%C3%B3a%20gi%C3%BAp%20Song%20Hye%20Kyo%20gi%E1%BB%AF%20v%E1%BB%AFng%20nhan%20s%E1%BA%AFc%20t%C6%B0%E1%BB%9Dng%20th%C3%A0nh - http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium tooltipstered"><i class="icon-phone"></i></a><a href="//www.facebook.com/sharer.php?u=http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered"><i class="icon-facebook"></i></a><a href="//twitter.com/share?url=http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered"><i class="icon-twitter"></i></a><a href="mailto:enteryour@addresshere.com?subject=%E2%80%9CN%C3%B3ng%20tr%C6%B0%E1%BB%9Bc%20l%E1%BA%A1nh%20sau%E2%80%9D%20%26%238211%3B%20b%C3%AD%20k%C3%ADp%20r%E1%BB%ADa%20m%E1%BA%B7t%20ch%E1%BB%91ng%20l%C3%A3o%20h%C3%B3a%20gi%C3%BAp%20Song%20Hye%20Kyo%20gi%E1%BB%AF%20v%E1%BB%AFng%20nhan%20s%E1%BA%AFc%20t%C6%B0%E1%BB%9Dng%20th%C3%A0nh&amp;body=Check%20this%20out:%20http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/" rel="nofollow" class="icon button circle is-outline tooltip email tooltipstered"><i class="icon-envelop"></i></a><a href="//pinterest.com/pin/create/button/?url=http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/&amp;media=http://mypham7.giaodienwebmau.com/wp-content/uploads/2019/07/songhyekyobientuongbaiphongvan1_hszn.jpg&amp;description=%E2%80%9CN%C3%B3ng%20tr%C6%B0%E1%BB%9Bc%20l%E1%BA%A1nh%20sau%E2%80%9D%20%26%238211%3B%20b%C3%AD%20k%C3%ADp%20r%E1%BB%ADa%20m%E1%BA%B7t%20ch%E1%BB%91ng%20l%C3%A3o%20h%C3%B3a%20gi%C3%BAp%20Song%20Hye%20Kyo%20gi%E1%BB%AF%20v%E1%BB%AFng%20nhan%20s%E1%BA%AFc%20t%C6%B0%E1%BB%9Dng%20th%C3%A0nh" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest tooltipstered"><i class="icon-pinterest"></i></a><a href="//plus.google.com/share?url=http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/" target="_blank" class="icon button circle is-outline tooltip google-plus tooltipstered" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow"><i class="icon-google-plus"></i></a><a href="//www.linkedin.com/shareArticle?mini=true&amp;url=http://mypham7.giaodienwebmau.com/nong-truoc-lanh-sau-bi-kip-rua-mat-chong-lao-hoa-giup-song-hye-kyo-giu-vung-nhan-sac-tuong-thanh/&amp;title=%E2%80%9CN%C3%B3ng%20tr%C6%B0%E1%BB%9Bc%20l%E1%BA%A1nh%20sau%E2%80%9D%20%26%238211%3B%20b%C3%AD%20k%C3%ADp%20r%E1%BB%ADa%20m%E1%BA%B7t%20ch%E1%BB%91ng%20l%C3%A3o%20h%C3%B3a%20gi%C3%BAp%20Song%20Hye%20Kyo%20gi%E1%BB%AF%20v%E1%BB%AFng%20nhan%20s%E1%BA%AFc%20t%C6%B0%E1%BB%9Dng%20th%C3%A0nh" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin tooltipstered"><i class="icon-linkedin"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                    <div id="tab-2">
                        <div class="footer-links">
                            <h3 class="links-title">{{ $configs['site_title'] }}</h3>
                            <div class="tabBlock" id="TabBlock-5">
                            <div class="footer-description"><b>{{__("guest.address")}}:</b> {{ $configs['site_address'] }}</div>
                            <div class="footer-description"> <b>{{__("guest.phone")}}:</b> {{ $configs['site_phone_long'] }}<br>
                                <b>Email:</b> {{ $configs['site_email'] }}<br>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @if (isset($productsToCategory) && count($productsToCategory) > 0)
        <div class="related-product">
            <div class="related-product-title">
                <h4> Các khóa học/sản phẩm liên quan</h4>
            </div>
            <div class="row row-small">
                @foreach($productsToCategory as $item)
                <div class="col-md-3 col-sm-4 col-xs-6">
                    @include ($theme.'.components.pages.home._product-item', array( "item" => $item))
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>

    @endsection

    @section('breadcrumb')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul style="list-style-type: none; display: flex;">
                        <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}"> {{__('guest.home')}}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                        
                        
                        @if(app()->getLocale()=="vi")
                            @if ($product->category)
                            <li class=""> <a title="{{ $product->category->name }}" href="{{ url('shop/'.ktc_str_convert($product->category->name).'_'.$product->category->id.'.html') }}">{{ $product->category->name }}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                        
                            <li class=""> <a title="{{ $product->category->name }}" href="{{ url('san-pham/'.ktc_str_convert($product->name).'_'.$product->id.'.html') }}">{{ $product->name }}</a></li>
                            @endif
                            @elseif(app()->getLocale()=="en")
                            @if ($product->category)
                            <li class=""> <a title="{{ $product->category->name_en }}" href="{{ url('shop/'.ktc_str_convert($product->category->name).'_'.$product->category->id.'.html') }}">{{ $product->category->name_en }}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
                        
                            <li class=""> <a title="{{ $product->category->name_en }}" href="{{ url('san-pham/'.ktc_str_convert($product->name).'_'.$product->id.'.html') }}">{{ $product->name_en }}</a></li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('scripts')
    <script>
        $(function() {
            $(".product-quantity button").on("click", function() {
                var $button = $(this);
                var $parent = $button.parent();
                var oldValue = $("#product-quantity-input").val();

                if ($button.attr('value') == "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 1;
                    }
                }
                // $parent.find('a.add-to-cart').attr('data-quantity', newVal);
                $("#product-quantity-input").val(newVal);
            });
        });
    </script>

    <script>
        $('.tabs-stage > div').hide();
        $('.tabs-stage div:first').show();
        $('.tabs-nav li:first').addClass('tab-active');

        // Change tab class and display content
        $('.tabs-nav a').on('click', function(event) {
            event.preventDefault();
            $('.tabs-nav li').removeClass('tab-active');
            $(this).parent().addClass('tab-active');
            $('.tabs-stage > div').hide();
            $($(this).attr('href')).show();
        });
    </script>
    @endpush