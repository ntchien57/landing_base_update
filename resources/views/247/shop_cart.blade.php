@extends($theme.'.shop_layout')
@push('style')
<link href="{{asset('css/guest/cart/list.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section("content")
<div class="cart-page">
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order">
                        <div class="page-title">
                            <h2 style="color: #e13487;"><i class="fa fa-cart-arrow-down"></i>&nbsp;{{__("guest.cart")}}</h2>
                        </div>
                        @if (count($cart) ==0)
                        <div class="col-md-12 text-danger">
                           {{__("guest.cart_empty_text")}}
                        </div>
                        @else
                        <div class="container">
                            <div class="row row-small">
                                <div class="col-sm-7">
                                    <form action="{{url('/gio-hang/cap-nhat')}}" method="POST" id="cart-form">
                                        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name" colspan="3">{{__("guest.cart_table_product")}}</th>
                                                    <th class="product-price">{{__("guest.cart_table_price")}}</th>
                                                    <th class="product-quantity">{{__("guest.cart_table_quantity")}}</th>
                                                    <th class="product-subtotal">{{__("guest.cart_table_total")}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if(count(Cart::content()) > 0)
                                                @foreach(Cart::content() as $cartItem)
                                                @php
                                                $n = (isset($n)?$n:0);
                                                $n++;
                                                $product = App\Models\ShopProduct::find($cartItem->id);
                                                @endphp
                                                <tr class="item">
                                                    <td class="buttons" style="text-align: center;">
                                                        <a href="{{url("removeItem/$cartItem->rowId")}}" onClick="return confirm('Bạn có muốn xóa sản phẩm này?')" href="{{url('gio-hang/xoa/'.$cartItem->rowId)}}" alt="Xóa phần tử"><i style="color: #e13475;" class="fa fa-trash"></i></a>
                                                    </td>

                                                    <td>{{ $product->sku }} </td>

                                                    <td class="description">
                                                        <a href="{{ url('san-pham/'.ktc_str_convert($product->name).'_'.$product->id.'.html') }}">{{$cartItem->name}}</a>
                                                        
                                                        <input type="hidden" name="cart_id[]" value="{{$cartItem->rowId}}">
                                                        <!-- <span>Bball High</span> -->
                                                        <!-- <span>White</span> -->
                                                    </td>

                                                    <td class="price">
                                                        {{number_format($cartItem->price,0,0,".")}} đ
                                                    </td>

                                                    <td class="quantity">
                                                        <button class="plus-btn" type="button" name="button">
                                                            <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                                                        </button>
                                                        <input class="product-amount"  productId="{{$cartItem->id}}" productRowId="{{$cartItem->rowId}}" type="text" name="quantity[]" value="{{$cartItem->qty}}">
                                                        <button class="minus-btn" type="button" name="button">
                                                            <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                                                        </button>

                                                    <td class="total">
                                                        {{number_format($cartItem->price*$cartItem->qty,0,0,".")}} đ
                                                    </td>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="action-button-group">
                                            <a href="#" class="button continue-btn">
                                                Tiếp tục đăng ký khóa học
                                            </a>
                                            @if(count(Cart::content()) > 0)
                                            <!-- <a type="submit" id="update-btn" class="button update-btn">
                                                {{__("guest.cart_update")}}
                                            </a> -->
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-5">
                                    <div class="payment-process">
                                        <div class="cart_totals ">

                                            <table cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name" colspan="2" style="border-width:3px;">{{__("guest.cart")}}</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <table cellspacing="0" class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>{{__("guest.cart_total_temp")}}</th>
                                                        <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount">{{Cart::subtotal(0,0,',')}}<span class="">₫</span></span></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>{{__("guest.cart_total")}}</th>
                                                        <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount">{{Cart::subtotal(0,0,',')}}<span class="">₫</span></span></strong> </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="proceed-to-checkout">

                                                <a href="{{url('/thanh-toan.html')}}" class="checkout-button button alt wc-forward">
                                                Tiến hành đăng ký khóa học</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('scripts')
<script>
    $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
    });

    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('td').find('input');
        var value = parseInt($input.val());

        if (value >= 1) {
            value = value - 1;
        } else {
            value = 1;
        }

        $input.val(value);
        let id = $input.attr("productId");
        let rowId = $input.attr("productRowId");
        updateCart(id,rowId, value);

    });

    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('td').find('input');
        // debugger
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value = 100;
        }

        $input.val(value);
        let id = $input.attr("productId");
        let rowId = $input.attr("productRowId");
        updateCart(id,rowId, value);
    });
    document.getElementById("update-btn").onclick = function() {
        document.getElementById("cart-form").submit();
    }
</script>
<script type="text/javascript">
    function updateCart(id, rowId, new_qty) {
        // var new_qty = $('#item-' + id).val();
        $.ajax({
            url: '{{ action('Shop@updateToCart')}}',
            type: 'POST',
            dataType: 'json',
            async: true,
            cache: false,
            data: {
                id: id,
                new_qty: new_qty,
                rowId: rowId,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                flg = parseInt(data.flg);
                if (flg === 1) {
                    window.location.replace(location.href);
                } else {
                    // $('.item-qty-' + id).css('display', 'block').html(data.msg);
                }

            }
        });
    }

$('input.product-amount').on('change', function(e) {
    e.preventDefault();
    debugger
    var $this = $(this);
    var $input = $this.closest('td').find('input');
    var value = parseInt($input.val());

    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }

    $input.val(value);
});

    $('#coupon-button').click(function() {
        var coupon = $('#coupon-value').val();
        if (coupon == '') {
            $('.coupon-msg').html('Bạn chưa nhập mã giảm giá').addClass('text-danger').show();
        } else {
            // $('#coupon-button').button('loading');
            setTimeout(function() {
                $.ajax({
                        url: '{{url("/usePromotion")}}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            code: coupon,
                            _token: "{{ csrf_token() }}",
                        },
                    })
                    .done(function(result) {
                        $('#coupon-value').val('');
                        $('.coupon-msg').removeClass('text-danger');
                        $('.coupon-msg').removeClass('text-success');
                        $('.coupon-msg').hide();
                        if (result.error == 1) {
                            $('.coupon-msg').html(result.msg).addClass('text-danger').show();
                        } else {
                            $('#removeCoupon').show();
                            $('.coupon-msg').html(result.msg).addClass('text-success').show();
                            $('.showTotal').remove();
                            $('#showTotal').prepend(result.html);
                        }
                    })
                    .fail(function() {
                        console.log("error");
                    })
                // .always(function() {
                //     console.log("complete");
                // });

                $('#coupon-button').button('reset');
            }, 2000);
        }




    });
    $('#removeCoupon').click(function() {
        $.ajax({
                url: '{{url("/usePromotion")}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    action: "remove",
                    _token: "{{ csrf_token() }}",
                },
            })
            .done(function(result) {
                $('#removeCoupon').hide();
                $('#coupon-value').val('');
                $('.coupon-msg').removeClass('text-danger');
                $('.coupon-msg').removeClass('text-success');
                $('.coupon-msg').hide();
                $('.showTotal').remove();
                $('#showTotal').prepend(result.html);
            })
            .fail(function() {
                console.log("error");
            })
        // .always(function() {
        //     console.log("complete");
        // });
    });
</script>
@endpush