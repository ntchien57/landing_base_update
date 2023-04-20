@extends($theme.'.shop_layout')
@push('style')
<link href="{{asset('css/guest/product/list-by-category.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section("content")
@section('breadcrumb')
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul style="list-style-type: none; display: flex;">
          <li class="home"> <a title="Go to Home Page" href="{{ url('/') }}">{{__("guest.home")}}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>

          
          @if(app()->getLocale()=="vi")
            @if (isset($categorySelf))
              @if ($categorySelf->getParent())
              <li><a href="{{ url('shop/'.ktc_str_convert($categorySelf->getParent()->name).'_'.$categorySelf->getParent()->id.'.html') }}">{{ $categorySelf->getParent()->name }}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
              @endif
            <li><a>{{ $categorySelf->name }}</a></li>
            @endif
          @elseif(app()->getLocale()=="en")
            @if (isset($categorySelf))
              @if ($categorySelf->getParent())
              <li><a href="{{ url('shop/'.ktc_str_convert($categorySelf->getParent()->name).'_'.$categorySelf->getParent()->id.'.html') }}">{{ $categorySelf->getParent()->name_en }}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
              @endif
              <li><a>{{ $categorySelf->name_en }}</a></li>
            @endif
          @endif
          @if (Request::get('keyword'))
          <li><a>{{__("guest.search")}}</a><span><i class="fa fa-chevron-right" style=" margin: 0 5px; font-size: 10px; color: #fd669f; "></i></span></li>
          <li><a>{{__("guest.keyword")}}: {{ Request::get('keyword') }}</a></li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
      <div class="product-by-category" style="margin-bottom: 3rem;">
        <div class="container">
<div class="toolbar row">
  <div class="view-mode col-md-9">
    <br>
    <ul style="list-style: none;">
      <li class="active">
        <h5 style="font-size: 1.5em; font-weight: 700;">{{ $title }}</h5>
      </li>
    </ul>
  </div>
</div>
<div class="row" >

    <div class="col-md-12 col-sm-12">
          <div class="row category-page-row">
            @if (isset($products) && count($products) > 0)
            @foreach($products as $item)
            <div class="col-md-3 col-sm-4 col-xs-6">
            @include ($theme.'.components.pages.home._product-item', ["item" => $item])
            </div>
            @endforeach
            @else
            @endif

          </div>
          
          <div class="pagination-area">
                <div class="row">
                  {{ $products->links() }}
                </div>
            </div>
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
              $("#menu-category-{{$categorySelf->getParent()->id}}").toggleClass("active");
            @else
              $("#menu-category-{{$categorySelf->id}}").toggleClass("active");
            @endif
          @endif
  </script>
  @endpush