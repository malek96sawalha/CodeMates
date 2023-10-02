@extends('layouts.master')
	<!-- Start About -->
  @section('content')

    <style> 
    .navbar a {
      font-size: 15px !important;
    }
     .navbar-nav{
      margin-left: 353px !important;
     }
    .top-navbar .container{
      margin:  0 20px !important;
    }
    </style>
  </head>
  <body>
    

	<!-- Start header -->


	<!-- End header -->



    
      <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
@php
    $cart = session('cart');
@endphp

@if (is_array($cart) && count($cart) > 0)
    <div class="col align-self-center text-right text-muted">{{ count($cart) }} items</div>
@else
    <div class="col align-self-center text-right text-muted">0 items</div>
@endif


                        </div>
                    </div>    

                            @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach

                       
                   
    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)

                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="../{{ $details['img'] }}"></div>
                            <div class="col">
                                <div class="row text-muted">{{ $details['name'] }}</div>
                                {{-- <div class="row">بلدي</div> --}}
                            </div>
                            @if (session('success'))
         <div class="alert alert-success">
             {{ session('success') }}
         </div>
     @endif
                            <div class="col">
                                                        <div id="counter">
      
      <span id="minus">-</span> <span  id="number" class="cart_update" >{{ $details['quantity'] }}</span> <span id="plus">+</span>
                                                        </div>
                            </div>
                            {{-- @dd($details) --}}
                            <div class="col">${{ $details['price'] }}
                                <form action="{{ route('remove_from_cart') }}/{{ $details['id']  }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="&#10005;" class="close"></span></div>
                                </form>
                            </div>
                                {{-- <div class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                                </div> --}}
                    </div>
                    {{-- </div> --}}
 @endforeach
                        @endif


                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        @php
    $cart = session('cart');
@endphp
                        @if (is_array($cart) && count($cart) > 0)
                            
                        <div class="col" style="padding-left:0;">ITEMS {{ count(session('cart')) }}</div>
                        @else
                        <div class="col" style="padding-left:0;">ITEMS 0</div>
                            
                        @endif
                        
                            
                        <div class="col text-right"> $ {{ $total }}</div>
                    </div>
                    <form action="{{ route('discount') }}" method="POST">
                        @csrf
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- $5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" name="discount" placeholder="Enter your code">
                        {{-- @dd($discountPercent) --}}
                        @isset($active)
                            <p>{{ $active }}</p>
                        @endisset
                        <input type="submit" value="code">
                    </form>

                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        @if (isset($discountPercent))
                        @php
                         $totalafterdiscount= $total - ($total * $discountPercent) + 5
                        @endphp
                        <div class="col text-right">$ {{  $totalafterdiscount}}</div>
                            @else
                        <div class="col text-right">$ {{ $total + 5}}</div>
                        @endif
                    </div>
                  {{-- <form action="{{ route('showcheackout') }}" method="POST">

@csrf
@if (isset($discountPercent))
                        @php
                         $totalafterdiscount= $total - ($total * $discountPercent) + 5
                        @endphp
                        @endif
<input type="hidden" name="price" value="<?php echo $total  ?>">
<button type="submit">Cheackout</button>
</form> --}}

<a href="{{ route('showcheackout') }}">Cheackout</a>
                </div>
            </div>
            
        </div>
        
  
</body>
</html>


<script type="text/javascript">
    
    $(".cart_update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    
    $(".cart_remove").click(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    
</script>
@endsection