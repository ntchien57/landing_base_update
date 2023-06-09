@extends($theme.'.shop_layout')
@section('banner')
@endsection

@section('content')
<div class="container" style="margin-top: 1rem; margin-bottom: 2rem;">
    @if (count($orders) ==0)
    <div class="col-md-12 text-danger">
        {{__("profile.order_empty")}}
    </div>
    @else
    <table class="table box  table-bordered table-responsive">
        <thead>
            <tr>
                <th style="width: 50px;">TT</th>
                <th style="width: 100px;">{{__("profile.order_code")}}</th>
                <th>{{__("profile.order_total")}}</th>
                <th>{{__("profile.order_status")}}</th>
                <th>{{__("profile.order_date")}}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            @php
            $n = (isset($n)?$n:0);
            $n++;
            // $order = App\Models\ShopProduct::find($item->id);
            @endphp
            <tr>
                <td><span class="item_21_id">{{ $n }}</span></td>
                <td><span class="item_21_sku">#{{ $order->id }}</span></td>
                <td align="right">
                    {{ number_format($order->total) }} VNĐ
                </td>
                <td>{{ $statusOrder[$order->status]}}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <a data-toggle="modal" data-target="#order-{{ $order->id }}" href="#"><i class="glyphicon glyphicon-list-alt"></i> {{__("profile.order_detail")}}</a>
                </td>
            </tr>


            <!-- Modal -->
            <div id="order-{{ $order->id }}" class="modal fade" role="dialog" style="z-index: 9999;">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" style="font-size: 19px; margin-bottom:0 !important;" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">{{__("profile.order_detail")}} #{{ $order->id }}</h4>
                        </div>
                        <div class="modal-body" style="padding: 1rem;">
                            @foreach($order->details as $detail)
                            <div class="row">
                                <div class="col-md-4">{{ $detail->name }} (<b>SKU:</b> {{ $detail->sku }})</div>
                                <div class="col-md-3" align="right">{{ number_format($detail->price) }} VNĐ</div>
                                <div class="col-md-2">{{$detail->attribute }}</div>
                                <div class="col-md-1">x {{ $detail->qty }}</div>
                                <div class="col-md-2" align="right">{{ number_format($detail->total_price) }} VNĐ</div>
                            </div>
                            @endforeach
                            <hr>
                            @foreach($order->orderTotal as $total)
                            @if ($total->value !=0)
                            <div class="row">
                                <div class="col-md-8" align="right">
                                    {!! $total->title !!}
                                </div>
                                <div class="col-md-4" align="right">{{ number_format($total->value) }} VNĐ</div>
                            </div>
                            @endif

                            @endforeach

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{__("guest.close")}}</button>
                        </div>
                    </div>

                </div>
            </div>


            @endforeach
            <style>
                .shipping_address td {
                    padding: 3px;
                }

                .shipping_address textarea,
                .shipping_address input {
                    width: 100%;
                }

                .modal-header {

                    display: flex;
                    background: #f33d7f;
                    color: white;
                }
            </style>
        </tbody>
    </table>
    <div class="view-more" style="line-height: 4rem">
        <a class="view-more-btn" href="{{ route('logout') }}" rel="nofollow" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                          {{__("guest.logout")}}
                      </a>
    </div>

    @endif
    @endsection

    @section('breadcrumb')
    <div class="container">
        <ul id="home-page-tabs" style="list-style: none; display: flex;" class="nav nav-tabs clearfix">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li><a>/</a></li>
            <li><a>Hố sơ của bạn</a></li>
        </ul>
    </div>
    @endsection

</div>