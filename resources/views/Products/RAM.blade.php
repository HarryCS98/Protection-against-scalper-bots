{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.Product_list')


{{--Section refers the to the yield in the layout class--}}
@section('products')

    <mousemovementlogging></mousemovementlogging>
    {{-- Bad fix for making so its only 3 products per row should fix at a later date   --}}

    <?php $count = 0 ?>

    @foreach($products as $product)
        {{--Need to find a better way then max width to stop the cards being to big--}}
        <div class="card" style="max-width: 22rem">

            <img style="height: 20vw" class="card-img-top" src="@if($product->Image != null) {{URL::asset('img/Product_images/'. $product->Image)}} @else {{ asset('img/Product_images/no_image.png') }} @endif ">

            <div class="card-body">

                <h4 class="card-title font-weight-bold text-capitalize">{{ $product->Brand . " " }}<a href="/category/ram/{{ $product->id }}">{{ $product->Product_Name }}</a></h4>

                <ul class="list-inline">
                    <li class="list-inline-item">&bull; {{ $product->Generation }} Generation</li>
                    <li class="list-inline-item">&bull; {{ $product->Size }} Size</li>
                    <li class="list-inline-item">&bull; {{ $product->Speed }} MHz RAM Speed</li>
                    <li class="list-inline-item">&bull; C{{ $product->Timings }} Timings</li>
                </ul>

                <p class="card-text lead pt-md-3 mb-0 ">£{{ $product->Price }}</p>


                <hr class="mt-0 pl-3"/>

                <button class="btn btn-primary">ADD TO BASKET</button>

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