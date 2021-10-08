{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')


        @hasSection('products')

            <div class="container pt-5 pb-5 min-vh-100">


            <div class="row">


                <div class="col">

                    <div class="card-group">

                        @yield('products')


                    </div>

                </div>


            </div>


            </div>

        @endif







    @sectionMissing('products')

    <div class="container" style="height: 100vh">

        <div class="row">

            <div class="col text-center">

                <h1 class="font-weight-bold text-danger pt-5"> Sorry no products available in this category </h1>

                <a class="btn btn-danger" style="width: 20vw" href="{{url()->previous()}}">Back</a>
            </div>

        </div>

    </div>

    @endif



@endsection
