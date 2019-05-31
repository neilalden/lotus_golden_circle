@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card bg-dark mt-4 col-md-8">
            <div class="py-2 mt-4 d-flex justify-content-center">
                <img src="/storage/member_images/{{$members->member_image}}" style="width:200px; height: 200px; border-radius: 50%;" class=""> 
            </div>
            <h3 class="d-flex justify-content-center">{{$members->full_name}}</h3>
            {{-- class="float-right" @if (Auth::user()->id == $members->user_id) --}}

            <div class="d-inline-flex justify-content-center">
                    <p class="text-white"><small class="mx-1 text-warning pl-1">warnings :</small>
                        {{$members->warnings}}</p>
                    
                    <p class="text-white"><small class="mx-1 text-danger pl-1">offenses :</small>
                        {{$members->offenses}}</p>
            
                    <p class="text-white"><small class="mx-1 text-info pl-1">absences :</small>
                        {{$members->absences}}</p>
            </div>
            
                
        <div class="flex-column"> 
        <p><small class="mx-1 text-white pl-1">Preferred Committee :</small>
        {{$members->preferred_committee}}</p>

        <p><small class="mx-1 text-white pl-1">Batch Name :</small>
            {{$members->batch_name}}</p>

        <p><small class="mx-1 text-white pl-1">Name of Group:</small>
            {{$members->name_of_group}}</p>

        <p><small class="mx-1 text-white pl-1">Direct Upline:</small>
            {{$members->direct_upline}}</p>

        <p><small class="mx-1 text-white pl-1">Email :</small>
            {{$members->email_address}}</p>

        <p><small class="mx-1 text-white pl-1">Contact Number :</small>
            {{$members->contact_number}}</p>

        <p><small class="mx-1 text-white pl-1">BA Number :</small>
            {{$members->BA_number}}</p>

        <p><small class="mx-1 text-white pl-1">Birthday :</small>
            {{$members->birthday}}</p>

        <p><small class="mx-1 text-white pl-1">Age :</small>
            {{$members->age}}</p>

        <p><small class="mx-1 text-white pl-1">Gender :</small>
            {{$members->gender}}</p>

        <p><small class="mx-1 text-white pl-1">Address :</small>
            {{$members->home_address}}</p>
        </div>
            
        </div>
    </div>
        <div class="container d-flex justify-content-center">
                <a href="/members/{{$members->id}}/edit" class="btn btn-outline-secondary my-2">Edit</a>
                    {!! Form::open(['action' => ['MembersController@destroy', $members->id], 'method' => 'POST', 'class' => 'float-left m-2']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
                    {!! Form::close()!!}
        </div>

        {{-- @endif --}}
@endsection