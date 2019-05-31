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
<div class="container my-4 py-4">
    <h1>Post Event</h1>
    {!! Form::open(['action' => 'EventsController@store', 'METHOD' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group mt-4 pt-4">
            {{Form::Label('title', 'Title',['class' => 'text-light'])}}
            {{Form::Text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group mt-4">
                {{Form::Label('body', 'Body',['class' => 'text-light'])}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
                <div class="custom-file col-md-6">
                        <input type="file" class="custom-file-input" name="event_image">
                        <label class="custom-file-label" for="event_image">Image/Video</label>
                </div>
        </div>
            {{Form::submit('Submit', ['class' => 'btn btn-outline-success'])}}
    {!! Form::close() !!}
</div>
@endsection