@extends('layouts.app')

@section('content')
    <div class="container mt-4 pt-4">
        <div class="card bg-dark" style="border-bottom:#333 1px solid; color:#fff; font-size: 25px;">
        <h1 class="card-header text-warning">{{$events->title}}</h1>
        @if (pathinfo($events->event_image, PATHINFO_EXTENSION) == 'mp4')
        <div class="d-flex justify-content-center" style="width:100%; background:#000;">
                <video width="812" height="375" controls>
                    <source src="/storage/event_images/{{$events->event_image}}" type="video/mp4">
                  </video>
        </div>
        @elseif($events->event_image == null)
        <br>
        @elseif(pathinfo($events->event_image, PATHINFO_EXTENSION) == 'jpg' or 'png')
        <div class="d-flex justify-content-center" style="width:100%; background:#000;">
            <img src="/storage/event_images/{{$events->event_image}}" width="812" height="375">
        </div>
        @endif
        <div class="container">
            <p>{!! $events->body !!}</p>
            <small>Posted by :</small><p class="text-warning">{{$events->user->name}}</p>
        </div>
    </div>
    @if (!Auth::guest())
        @if (Auth::user()->id == $events->user_id)
            
    <a href="/events/{{$events->id}}/edit" class="btn btn-outline-secondary my-2">Edit</a>
        {!! Form::open(['action' => ['EventsController@destroy', $events->id], 'method' => 'POST', 'class' => 'float-right my-2']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
        {!! Form::close()!!}
    </div>
        @endif
    @endif
@endsection