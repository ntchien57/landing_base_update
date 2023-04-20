@extends($theme.'.shop_layout', ["title" => "Tin tức"])

@push('style')
<link href="{{asset('css/guest/news/news.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@section("content")
<div class="section news-page">
    <div class="container">
        <div class="breadcrum">
        <p id="breadcrumbs"><span><span><a href="{{url('/')}}">{{__("guest.home")}}</a> <i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i> <span class="breadcrumb_last" aria-current="page">{{__("guest.news")}}</span></span></span></p>
        </div>
        <div class="title">
            <h1>{{__("guest.news")}}</h1>
        </div>
        <div class="description">
            <p>Cập nhật kinh nghiệm ôn thi, bài giảng hay cho các bạn sinh viên y.</p>
            <!-- <p>{{__("news.news_des_2")}}.</p> -->
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="news-list">
                    @if (isset($news) && count($news) > 0)
                        @foreach($news as $item)
                    <div class="news-item row row-small">
                        <div class="thumb col-md-4 col-sm-4">
                            <img src="{{ asset('documents/website/'.$item->image) }}" alt={{$item->title}} />
                        </div>
                        <div class="content col-md-8 col-sm-8 box-text-right">
                            <div class="title">
                                    <h3>
                                        <a href="{{ url('blog/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" >
                        @if(app()->getLocale()=="vi")
                            {{$item->title}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->title_en}}
                        @endif
                                            
                                        </a>
                                </h3>
                            </div>
                            <div class="description">
                                <p>
                        @if(app()->getLocale()=="vi")
                            {{$item->description}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->description_en}}
                        @endif
                                </p>
                            </div>
                        </div>
                    </div>
                        @endforeach 
                    @else

                    @endif
                </div>
                    {{ $news->links() }}
            </div>
            <div class="col-md-3">
                <div class="fanpage">
                    <img style="max-width: 100%;" src="{{ asset('documents/website') }}/{{ $logo->image }}" alt="Luyện thi nội trú " />
                </div>
                @include ($theme.'.components.pages.news._product-side-list', ["sideProductList" => $products_hot])
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(".news-nav_item").toggleClass("active");
</script>
@endpush

