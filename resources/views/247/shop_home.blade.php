@extends($theme.'.shop_layout')
@push('style')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" type="text/css">
<link href="{{asset('css/guest/home/home.css')}}" rel="stylesheet" type="text/css" />
<style>
    .feature-1-section {
        /* padding-bottom: 1rem; */

        padding: 15px 0;
        box-shadow: 0 3px 6px #e2e2e2;

    }

    .blog-card .image img {
        border-radius: 6px;
    }

    .blog-card .content::after {
        content: none !important;
    }

    .blog-card .content::before {
        content: none !important;
    }

    .hot-section {
        padding-top: 2rem;
        padding-bottom: 2rem;
        /* margin-top: 1rem; */
        background-color: white;
        /* margin-bottom: 25px !important; */
    }

    .review-section .col-md-3 {
        padding: 0 5px;

    }

    .review-section .review-item {
        border: 1px solid #d8e9ff;
        box-sizing: border-box;
        box-shadow: 0 4px 12px rgb(221 225 238 / 50%);
        border-radius: 5px;
        padding: 5px 10px;
        background: white;
        margin-right: 5px;

    }

    .bg-cou-review {
        position: absolute;
        /* top: 0; */
        right: 0;
        left: 0;
        z-index: 0;
        padding: 30px;
        background: linear-gradient(92.04deg, #0047ab -4.8%, #1751a3 101.85%);
        ;
    }

    .img-cou-review {
        background-position: 50%;
        background-size: cover;
        background-repeat: no-repeat;
        height: 295px;
        background: url(https://gitiho.com/frontend/img/gitiho_v2/bg-review.png);
        mix-blend-mode: screen;
    }

    .news-section {
        padding-top: 3rem;
        padding-bottom: 2rem;
        margin-top: 50px;
        background-color: white;
        /* margin-bottom: 25px !important; */
    }

    .section-margin {
        margin-bottom: 25px !important;
    }

    .section-padding-top {
        padding-top: 30px !important;
    }

    .section-title img{
        margin-right: 5px;
    }

    .section-title h2 {
        color: #d11a59;
        text-transform: uppercase !important;
        /* font-size: 24px !important; */
        font-size: 30px !important;
        font-family: 'Anton', sans-serif;
    }

    .section-title h2:after {
        background-color: transparent !important;
    }

    .feature-box {
        background-color: white;
        border-radius: 10px;
    }

    .product-card h3 a {
        text-transform: none;
        margin-bottom: 0;
    }

@media (max-width: 600px) {
    .hot-section .col-lg-3{
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .blog-slider .single-slide{
        margin: 0 !important;
    }
    .section-title h2{
        font-size: 24px !important;
    }
}

    @media (min-width: 1200px) {
        .price {
            font-size: 15px;
        }
    }

    .price {
        color: #d11a59;
        font-weight: 400;
    }

    .product-card {
        padding: 5px;
    }

    .review-section {
        background: white;
        border-radius: 10px;
        padding-top: 1rem;
        padding-bottom: 2rem;
    }

    .wrap_footer {
        /* float: left; */
        /* width: 50%; */
        margin-top: 1%;
        padding: 0 1%;
    }

    .wrap_footer .yken {
        color: #fff;
        min-height: 68px;
        border-radius: 10px;
        border: 3px solid #0a5f14;
        box-sizing: border-box;
        background: #0a5f14;
        /* font-family: arial, helvetica, sans-serif; */
        font-size: 13px;
        line-height: 18px;
        margin: 0px 0px 5px;
        padding: 15px;
        text-align: justify;
        vertical-align: baseline;
    }

    .wrap_footer h4 {
        margin: 0 0 -14px 0;
        color: #0a5f14;
        text-transform: uppercase;
        font-size: 18px;
    }

    @media (min-width: 576px) {

        .product-card.card-style-list .card-image,
        .product-card .card-image {
            height: 150px;
            overflow: hidden;
        }
    }

    @media (max-width: 600px) {
        .single-slide.bg-image {
            background-position-x: center !important;
        }
    }
</style>
@endpush
@section("content")
<div class="home-page">
    <!-- Banner Slider Beginning -->
    <!--=================================
        Hero Area
        ===================================== -->
    <section class="banner-section hero-area hero-slider-2" style="background-color: #186cb9;">
        <div class="container">
            <div class="align-items-lg-center">
                <div class="">
                    <div class="sb-slick-slider" data-slick-setting='{
                                                                "autoplay": true,
                                                                "autoplaySpeed": 8000,
                                                                "slidesToShow": 1,
                                                                "dots":true
                                                                }'>
                        @if (count($banners_top))
                        @foreach ($banners_top as $key => $banner_top)
                        <div class="single-slide bg-image bg-position-left bg-position-lg-center" data-bg="{{ asset('documents/website') }}/{{ $banner_top->image }}">
                            <div class="home-content text-left text-md-center pl--30 pl-md--0">
                                <div class="row">
                                    <!-- <div class="col-lg-7 col-xl-5 col-md-6 col-sm-6">
                                                                <span class="title-small">Beautifully Designed</span>
                                                                <h2>INSTA</h2>
                                                                <p>Cover up front of book and
                                                                    <br>leave summary</p>
                                                                <a href="shop-grid.html" class="btn btn-outlined--primary">
                                                                    Shop Now
                                                                </a>
                                                            </div> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Home Features Section
        ===================================== -->

    <section class="feature-1-section mb--30" style="background: #186cb9;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="text">
                            <h5><span style="text-transform: uppercase;">Bài giảng phong phú</span></h5>
                            <p><i>Học trực tuyến qua Zoom Meeting, Zavi, Facebook, Youtube</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5><span style="text-transform: uppercase;">Kiến thức trọng tâm</span></h5>
                            <p><i>Hóa Sinh, Sinh Lý đến Nội Khoa, Nhi Khoa, Giải Phẫu đến Ngoại Khoa</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt--30">
                    <div class="feature-box h-100">
                        <div class="icon">
                            <i class="fas fa-life-ring "></i>
                        </div>
                        <div class="text">
                            <h5><span style="text-transform: uppercase;">Ca lâm sàng hay</span></h5>
                            <p><i>Ca lâm sàng thực tế, vận dụng lý thuyết bệnh học</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Promotion Section One
        ===================================== -->

    <!--=================================
        CHILDREN’S BOOKS SECTION
        ===================================== -->


        @foreach ($categories as $category)
        @if($category->hot)

        <section class="hot-section">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2><img src="{{asset('images/logo-sticker.jpg')}}" alt="icon-sale" /><a href="{{ url('shop/'.ktc_str_convert($category->name).'_'.$category->id.'.html') }}">{{$category->name}}</a></h2>
                </div>
                <!-- <div class="product-slider product-list-slider slider-border-single-row sb-slick-slider"
                        data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow":3,
                                                "dots":true
                                            }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                            ]'> -->
                <div class="" style="display: flex; flex-wrap: wrap;">
                    @php
                        $products = $category->getProductsToCategory($category->id);
                    @endphp
                    @if (isset($products) && count($products) > 0)
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-3 col-xs-6 single-slide">
                        @include ($theme.'.components.pages.home._product-item', array("flick" => false, "item" => $item))
                    </div>
                    @endforeach
                    @else
                    @endif
                </div>
            </div>
        </section>

        @endif
        @if (count($category->getChildrens($category->id))>0)
        @foreach ($category->getChildrens($category->id) as $cateChild)
        @if($cateChild->hot)

        <section class="hot-section">
            <div class="container">
                <div class="section-title section-title--bordered">
                    <h2><img src="{{asset('images/logo-sticker.jpg')}}" alt="icon-sale" />{{$cateChild->name}}</h2>
                </div>
                <!-- <div class="product-slider product-list-slider slider-border-single-row sb-slick-slider"
                        data-slick-setting='{
                                                "autoplay": true,
                                                "autoplaySpeed": 8000,
                                                "slidesToShow":3,
                                                "dots":true
                                            }' data-slick-responsive='[
                                                {"breakpoint":1200, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":992, "settings": {"slidesToShow": 2} },
                                                {"breakpoint":575, "settings": {"slidesToShow": 1} },
                                                {"breakpoint":490, "settings": {"slidesToShow": 1} }
                                            ]'> -->
                <div class="">
                    @if (isset($cateChild) && count($cateChild->products) > 0)
                    @foreach($cateChild->products as $item)

                    <div class="col-lg-3 col-md-3 col-xs-6 single-slide">
                        @include ($theme.'.components.pages.home._product-item', array("flick" => false, "item" => $item))
                    </div>
                    @endforeach
                    @else
                    @endif
                </div>
            </div>
        </section>
        @endif
        @endforeach
        @endif
        @endforeach
    <section class="promotion-1-section section-margin">
        <h2 class="sr-only">Khuyến mãi</h2>
        <div class="container">
            <div class="row space-db--30">
                <div class="col-lg-6 mb--30">
                    <a href="" class="promo-image promo-overlay">
                        <img src="{{asset('media/guest/home/thumb-2.jpg')}}?k=123" alt="">
                    </a>
                </div>
                <div class="col-lg-6 mb--30">
                    <a href="" class="promo-image promo-overlay">
                        <img src="{{asset('media/guest/home/thumb-3.jpg')}}?k=123" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
<section class="review-section container">
    <div class="bg-cou-review">
        <div class="img-cou-review"></div>
    </div>
    <div class="header-cou-reviews text-center">

        <h4>Phản hồi về khóa học</h4>
    </div>
    <div class="wrap_footer ">
        <!-- <div class="" data-flickity  data-flickity-options='{
                    "cellAlign": "center",
                    "imagesLoaded": true,
                    "lazyLoad": true,
                    "freeScroll": false,
                    "wrapAround": true,
                    "prevNextButtons": false,
                    "autoPlay": 4000,
                    "pauseAutoPlayOnHover" : true,
                    "contain" : true,
                    "adaptiveHeight" : true,
                    "dragThreshold" : 10,
                    "percentPosition": true,
                    "pageDots": false,
                    "rightToLeft": false,
                    "draggable": true,
                    "selectedAttraction": 0.1,
                    "parallax" : 0,
                    "friction": 0.6    }'> -->
        <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 4,
                "dots": false
            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 3} },
                {"breakpoint":768, "settings": {"slidesToShow": 2} },
                {"breakpoint":575, "settings": {"slidesToShow": 2} },
                {"breakpoint":480, "settings": {"slidesToShow": 1} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="chia-cot-cot-1">
                <div class="review-item">
                    <div class="tin-tuc section" id="footer1" name="Cảm nhận khách hàng 1">
                        <div class="widget HTML" data-version="1" id="HTML1">
                            <div class="widget-content">
                                <div class="ykien"><b>
                                Mình bắt đầu học Hóa Sinh, Sinh Lý từ năm thứ 3, năm thứ 4 tự học Nội Nhi, năm thứ 5 học online Nội Nhi anh Thông và năm thứ 6 thì được anh ôn thi cho 9 tháng cuối. Năm 2019 mình hơi bất ngờ khi đỗ bác sĩ nội trú.</b>
                                <br/>
                                <br/>
                                </div>
                                <div style="border-image-outset: initial; border-image-repeat: initial; 
                            border-image-slice: initial; border-image-source: initial; border-image-width: initial; 
                            border: 0px; box-sizing: border-box; 
                            font-size: 12px; font-weight: normal; margin: 0px; padding: 0px; vertical-align: baseline;"><br>
                                    <img alt="" class="img-circle" src="{{asset('media/guest/icon/review-user-1.jpg')}}" style="-webkit-font-smoothing: antialiased; border-radius: 50%; border: 0px; box-sizing: border-box; float: left; height: auto; margin: 0px 10px 0px 0px; max-width: 100%; padding: 0px; text-shadow: none; vertical-align: middle; width: 80px;">
                                    
                                    <h4>Nguyễn.T.T.Tâm </h4>
                                    <span style="padding: 10px 0 0 0; font-family: Anton; color: #d11a59; font-size: 16px;;">Top 110</span>
                                    <br>
                                    <span>Sinh viên Y Thái Bình</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chia-cot-cot-2">
                <div class="review-item">
                    <div class="tin-tuc section" id="footer2" name="Cảm Nhận khách hàng 2">
                        <div class="widget HTML" data-version="1" id="HTML5">
                            <div class="widget-content">
                                <div class="ykien"><b>
                                Anh Thông và anh Thành Chew dạy mình Hóa Sinh từ năm 4. Năm 5 hè mình ở lại Hà Nội cày Nội Khoa với 2 anh. Bản thân là sinh viên Quân Y hệ dân sự cũng có khó khăn. Mình quyết tâm 6 tháng cuối và năm 2019 đỗ bác sĩ nội trú .</b></div>
                                
                                <div style="border-image-outset: initial; border-image-repeat: initial; 
                        border-image-slice: initial; border-image-source: initial; 
                        border-image-width: initial; border: 0px; box-sizing: border-box; 
                        font-size: 12px; font-weight: normal; margin: 0px; padding: 0px; vertical-align: baseline;"><br>
                                    <img alt="" class="img-circle" src="{{asset('media/guest/icon/review-user-2.jpg')}}" style="-webkit-font-smoothing: antialiased; border-radius: 50%; border: 0px; box-sizing: border-box; float: left; height: auto; margin: 0px 10px 0px 0px; max-width: 100%; padding: 0px; text-shadow: none; vertical-align: middle; width: 80px;">
                                    <h4>Nguyễn.T.Hà</h4>
                                    <span style="padding: 10px 0 0 0; font-family: Anton; color: #d11a59; font-size: 16px;;">Top 100</span>
                                    <br><span>Sinh viên Quân Y Dân Sự </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chia-cot-cot-2">
                <div class="review-item">
                    <div class="tin-tuc section" id="footer2" name="Cảm Nhận khách hàng 2">
                        <div class="widget HTML" data-version="1" id="HTML5">
                            <div class="widget-content">
                                <div class="ykien"><b>
                                Vô tình biết đến 2 anh từ hồi năm thứ 5 qua Facebook. Mình học Sinh Lý anh Thành Chew và Hóa Sinh anh Thông dạy. Mình được anh kèm Nội Nhi 1 năm, giải thích cặn kẽ, cơ chế bệnh học, liên hệ ca lâm sàng. Năm 2020, mình đỗ bác sĩ nội trú </b></div>
                                <div style="border-image-outset: initial; border-image-repeat: initial; 
                        border-image-slice: initial; border-image-source: initial; 
                        border-image-width: initial; border: 0px; box-sizing: border-box; 
                        font-size: 12px; font-weight: normal; margin: 0px; padding: 0px; vertical-align: baseline;"><br>
                                    <img alt="" class="img-circle" src="{{asset('media/guest/icon/review-user-3.jpg')}}" style="-webkit-font-smoothing: antialiased; border-radius: 50%; border: 0px; box-sizing: border-box; float: left; height: auto; margin: 0px 10px 0px 0px; max-width: 100%; padding: 0px; text-shadow: none; vertical-align: middle; width: 80px;">
                                    <h4>Đỗ.T.K.Thùy</h4>
                                    <span style="padding: 10px 0 0 0; font-family: Anton; color: #d11a59; font-size: 16px;;">Top 40</span>
                                    <br><span>Sinh viên Y Thái Bình</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chia-cot-cot-2">
                <div class="review-item">
                    <div class="tin-tuc section" id="footer2" name="Cảm Nhận khách hàng 2">
                        <div class="widget HTML" data-version="1" id="HTML5">
                            <div class="widget-content">
                                <div class="ykien"><b>
                                Hè năm Y5 mình học buổi Nội Tiêu Hóa 2 ngày anh Thông dạy. Thấy hay nên mình quyết đinh cày Nội Nhi 6 tháng với anh vào Thứ 7 & Chủ Nhật hàng tuần. Hè Y5 mình bắt đầu học Ngoại Sản. Các anh giúp mình giải những câu khó Nội Nhi. Năm 2019, mình đỗ bác sĩ nội trú </b></div>
                                <div style="border-image-outset: initial; border-image-repeat: initial; 
                        border-image-slice: initial; border-image-source: initial; 
                        border-image-width: initial; border: 0px; box-sizing: border-box; 
                        font-size: 12px; font-weight: normal; margin: 0px; padding: 0px; vertical-align: baseline;"><br>
                                    <img alt="" class="img-circle" src="{{asset('media/guest/icon/review-user-4.jpg')}}" style="-webkit-font-smoothing: antialiased; border-radius: 50%; border: 0px; box-sizing: border-box; float: left; height: auto; margin: 0px 10px 0px 0px; max-width: 100%; padding: 0px; text-shadow: none; vertical-align: middle; width: 80px;">
                                    <h4>Lê.V.Trung</h4>
                                    <span style="padding: 10px 0 0 0; font-family: Anton; color: #d11a59; font-size: 16px;;">Top 08</span>
                                    <br><span>Sinh viên Y6 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>
<!--=================================
        Home Blog
        ===================================== -->
<section class="section-margin news-section" >
    <div class="container">

        <div class="section-title section-title--bordered">
            <h2><img src="{{asset('images/logo-sticker.jpg')}}" alt="icon-sale" /><a href="{{url('tin-tuc.html')}}">Kinh nghiệm ôn thi</a></h2>
        </div>
        <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 3,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} }
            ]'>
            @if (isset($blogs) && count($blogs) > 0)
            @foreach($blogs as $item)
            <div class="single-slide">
                <div class="blog-card" style="display: block;">
                    <div class="image" style="    height: 200px; overflow: hidden;">
                        <img src="{{ asset('documents/website/'.$item->image) }}" alt="{{$item->title}}">
                    </div>
                    <div class="content">
                        <div class="content-header">
                            <div class="date-badge">
                                <span class="date">
                                    {{date('d', strtotime($item->created_at))}}
                                </span>
                                <span class="month">
                                    {{date('m', strtotime($item->created_at))}}
                                </span>
                            </div>
                            <h3 class="title"><a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}">{{$item->title}}</a>
                            </h3>
                        </div>
                        <!-- <p class="meta-para"><i class="fas fa-user-edit"></i>Đăng bởi <a href="#">Nhà sách KI-OT09</a></p> -->
                        <article class="blog-paragraph">
                            <h2 class="sr-only">blog-paragraph</h2>
                            <p>{{$item->description}}</p>
                        </article>
                        <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" class="card-link">Xem thêm <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @endif
        </div>
    </div>
</section>
    <section class="promotion-1-section section-margin">
        <h2 class="sr-only">Khuyến mãi</h2>
        <div class="container">
            <div class="row space-db--30">
                <div class="col-lg-12 mb--30">
                    <a href="" class="promo-image promo-overlay">
                        <img src="{{asset('media/guest/home/thumb-1.jpg')}}?k=123" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
<section class="section-margin news-section" style="margin-top: 0 !important;">
    <div class="container">

        <div class="section-title section-title--bordered">
            <h2><img src="{{asset('images/logo-sticker.jpg')}}" alt="icon-sale" /><a href="{{url('tai-lieu.html')}}">Chia sẻ tài liệu và bài viết</a></h2>
        </div>
        <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 3,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} }
            ]'>
            @if (isset($documents) && count($documents) > 0)
            @foreach($documents as $item)
            <div class="single-slide">
                <div class="blog-card" style="display: block;">
                    <div class="image" style="    height: 200px; overflow: hidden;">
                        <img src="{{ asset('documents/website/'.$item->image) }}" alt="{{$item->title}}">
                    </div>
                    <div class="content">
                        <div class="content-header">
                            <div class="date-badge">
                                <span class="date">
                                    {{date('d', strtotime($item->created_at))}}
                                </span>
                                <span class="month">
                                    {{date('m', strtotime($item->created_at))}}
                                </span>
                            </div>
                            <h3 class="title"><a href="{{ url('tai-lieu/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}">{{$item->title}}</a>
                            </h3>
                        </div>
                        <!-- <p class="meta-para"><i class="fas fa-user-edit"></i>Đăng bởi <a href="#">Nhà sách KI-OT09</a></p> -->
                        <article class="blog-paragraph">
                            <h2 class="sr-only">blog-paragraph</h2>
                            <p>{{$item->description}}</p>
                        </article>
                        <a href="{{ url('tai-lieu/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" class="card-link">Xem thêm <i class="fas fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            @endif
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-details-modal">
                <div class="">
                    <div class="col-lg-5">
                        <!-- Product Details Slider Big Image-->
                        <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                            <div class="single-slide">
                                <img src="image/products/product-details-1.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-2.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-3.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-4.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-5.jpg" alt="">
                            </div>
                        </div>
                        <!-- Product Details Slider Nav -->
                        <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                            <div class="single-slide">
                                <img src="image/products/product-details-1.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-2.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-3.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-4.jpg" alt="">
                            </div>
                            <div class="single-slide">
                                <img src="image/products/product-details-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt--30 mt-lg--30">
                        <div class="product-details-info pl-lg--30 ">
                            <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                            <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                            <ul class="list-unstyled">
                                <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                <li>Product Code: <span class="list-value"> model1</span></li>
                                <li>Reward Points: <span class="list-value"> 200</span></li>
                                <li>Availability: <span class="list-value"> In Stock</span></li>
                            </ul>
                            <div class="price-block">
                                <span class="price-new">£73.79</span>
                                <del class="price-old">£91.86</del>
                            </div>
                            <div class="rating-widget">
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="review-widget">
                                    <a href="">(1 Reviews)</a> <span>|</span>
                                    <a href="">Write a review</a>
                                </div>
                            </div>
                            <article class="product-details-article">
                                <h4 class="sr-only">Product Summery</h4>
                                <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                    the Dust with ruffles
                                    at the bottom
                                    of the
                                    dress.</p>
                            </article>
                            <div class="add-to-cart-row">
                                <div class="count-input-block">
                                    <span class="widget-label">Qty</span>
                                    <input type="number" class="form-control text-center" value="1">
                                </div>
                                <div class="add-cart-btn">
                                    <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                </div>
                            </div>
                            <div class="compare-wishlist-row">
                                <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="widget-social-share">
                    <span class="widget-label">Share:</span>
                    <div class="modal-social-share">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================================
        Footer
        ===================================== -->
</div>
<!--=================================
        Brands Slider
        ===================================== -->

<!--=================================
        Footer Area
        ===================================== -->
</div>
@endsection
@push('scripts')
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    $(".home-nav_item").toggleClass("active");
    // $("#home2-nav_item").toggleClass("active");
</script>
@endpush