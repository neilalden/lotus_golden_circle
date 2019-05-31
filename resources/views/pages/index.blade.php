@extends('layouts.app')

@section('content')
<section id="home">
<div class="jumbotron text-center" style="background:#000; border-radius:0%;">
     <div class="row py-0">
        <div class="col-md-4">
            <img src="logo.png" height="250px" width="250px" style=" border-radius:50%; overflow:hidden !important;">
        </div>
            <div class="col-md-6 justify-content-center">
                <h1>we are</h1>
                <h1>LOTUS GOLDEN CIRCLE</h1>
        </div>
    </div> 
</div>
<div class="container mt-0 pt-4" style="width:100%;">
<h3 class="ml-4 pl-4 text-light">Events And Announcements</h3>
    @if(count($events) > 0)
        @foreach ($events as $event)
            <div class="container my-4 py-4" style="border-top:#333 1px solid; color:#fff !important;">
            <h1 class="ml-2"><a style="color:#ffd700;" href="/events/{{$event->id}}">
                {{$event->title}}</a></h1>
            <p>{!! str_limit($event->body, '250') !!}</p>
            </div>
        @endforeach
        {{$events->links('vendor.pagination.bootstrap-4')}}
    @else
        <p class="secondary">no events yet</p>
    @endif 
</div>
@endsection