
{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')

{{--Display banned ip that has been passed through--}}

<div class="page-wrap d-flex flex-row align-items-center pt-5">
    <div class="container vh-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">Error 403</span>
                <div class="mb-4 lead"><h1>You have been caught using a scalper bot</h1> <br /><h2>Your ip {{--{{$ip}}--}} has been banned if you think this is a mistake contact us at support@ushop.com <br /> <br /> <b>DEBUG ONLY FOR DEMO Reason why the user was banned "{{$reason}}"</b></h2> </div>
            </div>
        </div>
    </div>
</div>

@endsection
