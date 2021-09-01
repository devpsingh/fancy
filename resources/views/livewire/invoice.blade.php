<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    @if(!is_null($order_info) && !is_null($shipping_address) && !is_null($billing_address))
<div class="container mt-3">
    <div class="card">
        <div class="card-header d-flex"><div class="mr-auto">
        <h4>Invoice No. FF-{{$order_info->id}}</h4>
        <h6 ><strong>Order No: {{$order_info->order_id}}
        <br>Pay Id: @if($order_info->payment_mode=='cod') Cash on delivery @else {{$order_info->stripe_id}} @endif
        <br>Email:{{$order_info->email}}</strong>
        <br>Billing Address:<br>{{$billing_address->address_1}},
        @if(!is_null($billing_address->address_2)) <br>{{$billing_address->address_2}}, @endif
        @if(!is_null($billing_address->address_2)) {{$billing_address->address_3}}, @endif
        <br>@if(!is_null($billing_city)){{$billing_city->name}},@endif @if(!is_null($billing_state)){{$billing_state->name}}@endif
        <br>@if(!is_null($billing_country)){{$billing_country->name}}-@endif{{$billing_address->postal_code}}
        </h6>
            
        </div>
        <div class="justify-content-center"><br><img src="{{asset('images/LOGO.svg')}}" style="height:60px"></div>
            <div class="ml-auto">
               <h6><b>Shipping Address:</b> <br>Name: {{Str::ucfirst($shipping_address->first_name)}} {{$shipping_address->last_name}}
               @if(!is_null($shipping_address->address_2)) <br>{{$shipping_address->address_2}}, @endif
                @if(!is_null($shipping_address->address_2)) {{$shipping_address->address_3}}, @endif
                {{$shipping_address->address_3}},<br>@if(!is_null($shipping_city)){{$shipping_city->name}},@endif
                @if(!is_null($shipping_state)){{$shipping_state->name}} @endif
                <br>@if(!is_null($shipping_country)){{$shipping_country->name}}-@endif{{$shipping_address->postal_code}}
                <br>Mobile: {{$shipping_address->mobile}}
                </h6>
            </div>
    </div>
    <style>
    .borderless td, .borderless th {
        border: none;
        padding:2px;
    }
    </style>
        <div class="card-body">
             <table class="table borderless">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Base Price</th>
                    <th scope="col">VAT (20%)</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                @php
                     $i=1;$total_quantity=0;$total_base_price=0;$total_tax=0;$total_price=0;
                     $shipping_charge=$shipping_address->delivery_charge;
                @endphp
                    @foreach(json_decode($order_info->product_info) as $product)
                    @php 
                        $total_quantity=$total_quantity+$product->qty;
                        $total_base_price=$total_base_price+($product->price*$product->qty)-($product->tax*$product->qty);
                        $total_tax=$total_tax+($product->tax*$product->qty);
                        $total_price=$total_price+($product->price*$product->qty);
                        $discount=$total_price*($coupon_discount/100);
                    @endphp
                    <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->options->code}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{($product->price*$product->qty)-($product->tax*$product->qty)}}</td>
                    <td>{{$product->tax*$product->qty}}</td>
                    <td>{{$product->price*$product->qty}}</td>
                    </tr>
                    @php $i++; @endphp
                 @endforeach
                 <tr>
                     <td colspan="2" class="text-right"></td>
                     <td><b>Total<b></td>
                     <td>{{$total_quantity}}</td>
                     <td>{{$total_base_price}}</td>
                     <td>{{$total_tax}}</td>
                     <td>{{$total_price}}</td>
                 </tr>
                 <tr>
                    <td colspan="2" class="text-right"></td>
                    <td><b>Delivery Charges<b></td>
                    <td colspan="3" ></td>
                    <td><b><i class="fa fa-pound-sign"></i> {{$shipping_charge}}</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right"></td>
                    <td><b>Additional charges<b></td>
                    <td colspan="3" ></td>
                    <td><b><i class="fa fa-pound-sign"></i> {{($total_quantity-1)*8}}</b></td>
                </tr>
                 <tr>
                    <td colspan="2" class="text-right"></td>
                    <td><b>Discount<b></td>
                    <td colspan="3" ></td>
                    <td><b>- <i class="fa fa-pound-sign"></i>  {{$discount}}</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right"></td>
                    <td><b>Grand Total<b></td>
                    <td colspan="3" ></td>
                    <td><b><i class="fa fa-pound-sign"></i> {{$total_price-$discount+(($total_quantity-1)*8)+$shipping_charge}}</b></td>
                </tr>
                </tbody>
                </table>
        </div>
        <div class="card-footer">
            <h6>**For order related issue, send us an email at sales@fancyfab.co.uk withing 24 hours after receiving your order
                <p>**For single product no additional charge applicable, after that GBP 8 applicable for eache additional product</p>
            </h6>
        </div>
    </div>
</div>
@endif
</div>
