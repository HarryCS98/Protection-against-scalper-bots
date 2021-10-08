{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')


    <mousemovementlogging></mousemovementlogging>

    {{--Need to find a better solution for this --}}
    <?php $count = 0; ?>



    <div class="container" style="background-color: white; height: 100vh">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach($products as $product)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <img class="media-object mr-3"
                                         src="@if($product->associatedModel->Image != null) {{URL::asset('img/Product_images/'. $product->associatedModel->Image)}} @else {{ asset('img/Product_images/no_image.png') }} @endif"
                                         style="width: 72px; height: 72px;">
                                    <div class="media-body">
                                        <h4 class="media-heading"> {{$product->associatedModel->Brand}} </h4>
                                        <h5 class="media-heading"> {{$product->name}}</h5>
                                    </div>
                                </div>
                            </td>

                            <td class="col-sm-1 col-md-1 text-center"><strong>{{$product->quantity}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>£{{$product->price}}</strong></td>
                            <?php $count = $count + $product->price ?>
                            <td>  </td>

                            <td class="col-sm-1 col-md-1">
                                <form method="post" action="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="Product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>


                    @endforeach


                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>£{{$count}}</strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5>Estimated shipping</h5></td>
                        {{--Would change this for a production applcation--}}
                        <td class="text-right"><h5><strong>£7.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>£{{$count + 7}}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>
                            <a class="btn btn-success" href="{{route('Checkout') }}">Checkout</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
