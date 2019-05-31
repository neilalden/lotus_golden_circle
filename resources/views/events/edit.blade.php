@extends('layouts.app')

@section('content')

<style>
        html, body{
            font-family: AdobeJensonSmallCaps;
            font-style: normal;
            font-size: 18px;
            color: gold;
            background: #1a1a1a;
        }
        </style>
<div class="container  my-4 py-4">
    <h1>Update Events/Announcements</h1>

    {!! Form::open(['action' => ['EventsController@update', $events->id], 'METHOD' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group mt-4 pt-4">
            {{Form::Label('title', 'Title')}}
            {{Form::Text('title', $events->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group mt-4">
                {{Form::Label('body', 'Body')}}
                {{Form::textarea('body', $events->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-outline-light'])}}
    {!! Form::close() !!}
</div>
@endsection