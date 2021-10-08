
{{--Import the layout (layout specifys thats its a layout and then app is the name of the layout--}}
@extends('layouts.app')


{{--Section refers the to the yield in the layout class--}}
@section('content')


<ul>


@foreach($ips as $ip)

        <li><a href="/test/{{$ip}}">{{$ip}}</a></li>

@endforeach


</ul>

@endsection
