
{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')


<div class="page-wrap d-flex flex-row align-items-center pt-5">
    <div class="container vh-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">Congratulations</span>
                <div class="mb-4 lead"><h1>You have successfully purchased an item from the store</h1></div>
            </div>
        </div>
    </div>
</div>

@endsection
