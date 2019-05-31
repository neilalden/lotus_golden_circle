@extends('layouts.app')

@section('content')
<div class="container mb-0 pb-0">
    <div class="row justify-content-center mb-0 pb-0">
        <div class="col-md-8 mb-0 pb-0">
            <div class="card bg-dark mb-0 pb-0 mt-4">
                <div class="card-header" style="background:#2e3438;">Dashboard</div>

                <div class="card-body bg-dark" style="color:white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 class=" pl-4 text-light" style="border-left:#fff 1px solid;">Events and Annnouncements You've Posted</h3>

                    @if (count($events) > 0)
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80%">Title</th>
                            <th style="width: 10%"></th>
                            <th style="width: 10%"></th>
                        </tr>
                        </thead>
                        @foreach ($events as $event)
                        <tr>
                            <td><a style="color:#ffd700;" href="/events/{{$event->id}}">
                                {{$event->title}}</a></td>
                            <td><a href="/events/{{$event->id}}/edit" class="my-0 btn btn-outline-secondary">edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' =>'float-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'my-0 btn btn-outline-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p class="text-secondary">you haven't posted yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
