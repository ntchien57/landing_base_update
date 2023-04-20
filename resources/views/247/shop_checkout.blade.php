@extends($theme.'.shop_layout')
@push('style')
<link href="{{asset('css/guest/cart/checkout.css')}}" rel="stylesheet" type="text/css" />
<style>
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}
.input-group .form-control {
    display: table-cell;
}
.form-group input, .form-group textarea  {
    display: table-cell;
    margin-bottom: 9px;
    font-style: italic;
    transition: border-color .15s;
    border-radius: .25rem !important;
}
.input-group-addon {
    display: table-cell;
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.coupon-msg.text-danger{
    padding-top: 5px;
    color: red;
    font-style: italic;
}

.coupon-msg.text-success{
    padding-top: 5px;
    color: green;
    font-style: italic;
}

#removeCoupon{
    color: red;
}

</style>
@endpush
@section("content")
<div class="checkout-page">
    <div class="container">
        <form id="checkout-form" method="POST"  action="{{ url('storecart') }}">
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <div class="row row-small">
                            @php
                                $valid = true;
                            @endphp
                <div class="col-md-7">
                    <h3>{{__("guest.cart_payment_info")}}</h3>
                        <div class="form-group">
                            <input name="toname" type="text" placeholder="{{__('guest.full_name')}}" value="{{ (Auth::user() && !old('toname'))?Auth::user()->name: old('toname')}}"  required/>
                            @if($errors->has('toname'))
                                <span class="help-block">{{ $errors->first('toname') }}</span>
                            @endif
                            <input name="phone" type="text" placeholder="{{__('guest.cart_phone')}}" value="{{ (Auth::user() && !old('phone'))?Auth::user()->phone: old('phone')}}"  required/>
                            @if($errors->has('phone'))
                                <span class="help-block">{{ $errors->first('phone') }}</span>
                            @endif
                            <input name="address1" type="text" placeholder="{{__('guest.cart_address')}}" value="{{ (Auth::user() && !old('address1'))?Auth::user()->address1: old('address1')}}"/>
                            @if($errors->has('address1'))
                                <span class="help-block">{{ $errors->first('address1') }}</span>
                            @endif</td>
                            <input name="address2" type="text" placeholder="{{__('guest.cart_province')}} " value="{{ (Auth::user() && !old('address2'))?Auth::user()->address2: old('address2')}}"/>
                            @if($errors->has('address2'))
                                <span class="help-block">{{ $errors->first('address1') }}</span>
                            @endif</td>
                        </div>

                        <h3>{{__('guest.cart_order_note')}}</h3>
                        <textarea  name="comment" type="text" placeholder="{{__('guest.cart_order_note_placeholder')}} " rows="10" class="form-control"></textarea>
                    
                    
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="payment-info">
                        <div class="title">
                            <span>{{__('guest.cart_your_order')}}</span>
                        </div>
                        <table class="payment-info-table">
                            <thead>
                                <tr>
                                    <th class="product-name">{{__('guest.cart_table_product')}}</th>
                                    <th class="product-total">{{__('guest.cart_table_total')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count(Cart::content()) > 0)
                                    @foreach(Cart::content() as $cartItem)
                                        <tr class="cart_item">
                                            <input type="hidden" name="product_code[]" value="{{$cartItem->options->code}}">
                                            <input type="hidden" name="product_quantity[]" value="{{$cartItem->qty}}">
                                            <input type="hidden" name="product_price[]" value="{{$cartItem->price}}">
                                            <input type="hidden" name="product_total[]" value="{{$cartItem->price*$cartItem->qty}}">
                                            <td class="product-name">
                                                {{$cartItem->name}} 
                                                <strong class="product-quantity">× {{$cartItem->qty}}</strong> 
                                            <td class="product-total">
                                                <span class="woocommerce-Price-amount amount">{{number_format($cartItem->price*$cartItem->qty,0,0,".")}}<span class="woocommerce-Price-currencySymbol">₫</span></span> </td>

                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>


                            @if (!empty($configs['promotion_mode']) == 1 && auth()->user())
                        <tr>
                            <td colspan="2">
                                  <div class="form-group">
                                    @php
                                        $style = ($hasCoupon)?"display:inline;":"display: none;";
                                    @endphp

                                    <label class="control-label" for="inputGroupSuccess3"><i class="glyphicon glyphicon-scissors"></i> {{__('guest.cart_sale_code')}} <span style="{{ $style }} cursor: pointer;" class="text-danger" id="removeCoupon">({{__('guest.cart_remove_code')}} <i class="glyphicon glyphicon-remove"></i>)</span></label>
                                    <div class="input-group">
                                      <input style="margin-bottom: 0 !important;" type="text" placeholder="Nhập mã giảm giá" class="form-control" id="coupon-value" aria-describedby="inputGroupSuccess3Status">
                                      <span class="input-group-addon"  id="coupon-button" style="cursor: pointer;" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Đang kiểm tra">{{__('guest.cart_check')}}</span>
                                    </div>
                                    <span class="status-coupon" style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                    <div class="coupon-msg" style="text-align: left;padding-left: 10px;"></div>
                                  </div>
                            </td>
                        </tr>
                        @else
                        <!-- <tr>
                            <td colspan="2">
                                  <div class="form-group">
                                    @php
                                        $style = ($hasCoupon)?"display:inline;":"display: none;";
                                    @endphp

                                    <label class="control-label" for="inputGroupSuccess3"><i class="glyphicon glyphicon-scissors"></i> Mã giảm giá <span style="{{ $style }} cursor: pointer;" class="text-danger" id="removeCoupon"></span></label>
                                    <div class="input-group"> -->
                                      <!-- <input style="margin-bottom: 0 !important;" type="text" disabled placeholder="Nhập mã giảm giá" class="form-control" id="coupon-value" aria-describedby="inputGroupSuccess3Status"> -->
                                      <!-- <a href="{{url('login.html')}}"><span class="input-group-addon"  id="coupon-button" style="cursor: pointer;" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Đang kiểm tra">{{__('guest.cart_login_to_input_sale_code')}}</span></a>
                                    </div>
                                    <span class="status-coupon" style="display: none;" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                    <div class="coupon-msg" style="text-align: left;padding-left: 10px;"></div>
                                  </div>
                            </td>
                        </tr> -->
                    @endif
                                <tr class="cart-subtotal">
                                    <th>{{__('guest.cart_total_temp')}}</th>
                                    <td><span class="woocommerce-Price-amount amount">{{Cart::subtotal(0,0,',')}}<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                </tr>
                                <tr class="cart-subtotal">
                                    <th>{{__('guest.cart_discount')}}</th>
                                    <td><span  class="woocommerce-Price-amount amount"><span id="cut_price">
                                        
                            @if (!empty($configs['promotion_mode']) == 1 && isset($couponValue) && auth()->user())
                                {{$couponValue}}
                            @else
                                0
                            @endif
                                    
                                    </span><span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                                </tr>
                                <!-- <tr class="order-total">
                                    <th>Tổng</th>
                                    <td>
                                            <input type="hidden" name="txt_total" value="{{Cart::subtotal(0,0,'')}}">
                                            <strong><span class="woocommerce-Price-amount amount">{{Cart::subtotal(0,0,',')}}<span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
                                </tr> -->
                            </tfoot>
                        </table>
                        <ul class="payment_methods methods">
                            <li class="wc_payment_method payment_method_bacs">
                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="BANK" checked="checked" data-order_button_text="">

                                <label for="payment_method_bacs">
                                {{__('guest.cart_banking_payment')}} </label>
                                <div class="payment_method_bacs">
                                    <p>{{__('guest.cart_banking_payment_desc')}}.</p>
                                </div>
                            </li>
                            <li class="wc_payment_method payment_method_cod">
                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="COD" data-order_button_text="">

                                <label for="payment_method_cod">
                                {{__('guest.cart_cod')}} </label>
                                <div class="payment_box payment_method_cod" style="display:none;">
                                    <p>{{__('guest.cart_cod_desc')}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="submit" type="button" id="hidden-submit-btn" style="display: none;"></button>
            </div>
                        <div class="proceed-to-checkout">
                            @if($valid)
                            <a id="checkout-button" class="checkout-button button alt wc-forward">
                            {{__('guest.cart_order_process')}}</a>
                            @else
                            <a  style="background: gray;" class="checkout-button button alt wc-forward">
                            {{__('guest.cart_order_process_invalid')}}</a>
                            @endif
                        </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    var hiddenSubmitBtn = document.getElementById('hidden-submit-btn');
    document.getElementById("checkout-button").onclick = function() {
        // debugger
        hiddenSubmitBtn.click();
    }
</script>
<script type="text/javascript">
    function updateCart(id) {
        var new_qty = $('#item-' + id).val();
        $.ajax({
            url: '{{ action('Shop@updateToCart') }}',
            type: 'POST',
            dataType: 'json',
            async: true,
            cache: false,
            data: {
                id: id,
                new_qty: new_qty,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                flg = parseInt(data.flg);
                if (flg === 1) {
                    window.location.replace(location.href);
                } else {
                    $('.item-qty-' + id).css('display', 'block').html(data.msg);
                }

            }
        });
    }

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
                        $('#cut_price').html(result.value);
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
                        $('#cut_price').html(0);
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