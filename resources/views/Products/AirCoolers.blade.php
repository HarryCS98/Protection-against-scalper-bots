{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.Product_list')


{{--Section refers the to the yield in the layout class--}}
@section('products')

    {{-- TODO remove    --}}
    {{-- Pass data to our vue component    --}}
    {{--    <passdata :data="{{ $products }}"></passdata>--}}


    {{-- Bad fix for making so its only 3 products per row should fix at a later date   --}}

    <?php $count = 0 ?>

   {{-- <passdata></passdata>--}}

    @foreach($products as $product)
        {{--Need to find a better way then max width to stop the cards being to big--}}
        <div class="card" style="max-width: 22rem">

            <img class="card-img-top" src="@if($product->Image != null) {{URL::asset('img/Product_images/'. $product->Image)}} @else {{ asset('img/Product_images/no_image.png') }} @endif ">

            <div class="card-body">

                <h4 class="card-title font-weight-bold text-capitalize">{{ $product->Brand . " " }}<a href="/category/AirCooler/{{ $product->id }}">{{ $product->Product_Name }}</a></h4>

                <ul class="list-inline">
                    <li class="list-inline-item">&bull; {{ $product->Socket }} Socket</li>
                    <li class="list-inline-item">&bull; {{ $product->Fan_Size }}mm Fans</li>
                    <li class="list-inline-item">&bull; {{ $product->Amount_Fans }} Fans</li>
                </ul>

                <p class="card-text lead pt-md-3 mb-0 ">£{{ $product->Price }}</p>


                <hr class="mt-0 pl-3"/>

       {{--         <button class="btn btn-primary">ADD TO BASKET</button>--}}
                <a class="btn btn-primary" href="/category/AirCooler/{{ $product->id }}">Click ME</a>

            </div>

        </div>

        {{-- Bad fix for making so its only 3 products per row should fix at a later date   --}}

        <?php
        $count++;

        if($count % 3 == 0){
            echo '</div>';
            echo '<div class="card-group">';
        }

        ?>

    @endforeach

@endsection

