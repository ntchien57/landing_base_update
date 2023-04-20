@extends($theme.'.shop_layout')

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
            <h1>
            @if(app()->getLocale()=="vi")
            {{$categorySelf->title}}
            @elseif(app()->getLocale()=="en")
            {{$categorySelf->title_en}}
            @endif
            
            </h1>
        </div>
        <div class="description">
            <p>
            @if(app()->getLocale()=="vi")
            {{$categorySelf->description}}
            @elseif(app()->getLocale()=="en")
            {{$categorySelf->description_en}}
            @endif</p>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="news-list row">
                    @if (isset($news) && count($news) > 0)
                        @foreach($news as $item)
                    <div class="news-item col-md-4 row-small" style="padding: 0 1rem;">
                    <div>
                        <div class="thumb" style="height: 150px;background: url({{ asset('documents/website/thumb/'.$item->image) }}) 100% 100% no-repeat;">
                            
                        </div>
                    </div>
                    <div>
                        <div class="content box-text-right">
                            <div class="title">
                                    <h3 style="margin-bottom: 5px;">
                                        <a href="{{ url('bai-viet/'.ktc_str_convert($item->title).'_'.$item->id.'.html') }}" >
                        @if(app()->getLocale()=="vi")
                            {{$item->title}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->title_en}}
                        @endif
                                            
                                        </a>
                                </h3>
                            </div>
                            <div class="description">
                                <p  style="margin-top: 5px;">
                        @if(app()->getLocale()=="vi")
                            {{$item->description}}
                        @elseif(app()->getLocale()=="en")
                            {{$item->description_en}}
                        @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                        @endforeach 
                    @else

                    @endif
                    </div>
                </div>
            <div class="col-md-3">
                <div class="fanpage">
                    <img style="max-width: 100%;" src="{{asset('documents/website/'.$categorySelf->image) }}" alt="{{$categorySelf->title}}" />
                </div>
                @include ($theme.'.components.pages.news._product-side-list', ["sideProductList" => $products_hot])
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
  <script>
    @if(isset($slug))
    $('#menu-nav .nav > .nav-links > a[slug="{{$slug}}"]').toggleClass("active");
    @endif
          @if (isset($categorySelf))
            @if ($categorySelf->getParent())
              $("#menu-article-{{$categorySelf->getParent()->id}}").toggleClass("active");
            @else
              $("#menu-article-{{$categorySelf->id}}").toggleClass("active");
            @endif
          @endif
  </script>
@endpush

