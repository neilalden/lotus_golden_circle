@extends('layouts.app')

@section('content')
<div class="container pb-4">
    <form action="{{URL::to('/search')}}" method="POST" role="search" class="form-inline mt-2 mt-md-0 d-flex"> 
        {{ csrf_field() }}

        <div class="d-flex p-2">
          <input class="form-control mr-sm-2 mt-3" type="text" name="q" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning mt-3" type="submit">Search</button>
        </div>
        
        <div class="dropdown show mt-3 p-2">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Committees
            </a>
        
            <div class="dropdown-menu  bg-dark" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/documentary">Documentary</a>
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/events">Events</a>
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/finance">Finance</a>
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/friendship">Friendship</a>
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/logistics">Logistics</a>
                <a class="dropdown-item bg-dark" style="color: #ffffff;" href="/members/socialmedia">Social media</a>
                </div>
            </div>
        </form>


        <h1 class="d-flex justify-content-center">all members</h1>
        @if(count($members) > 0)
            @foreach($members as $member)
            <div class="container d-flex justify-content-center">
                <div class="card col-md-7 bg-dark my-1">
                    <div class="row">
                        <div class="media">
                            <img class="align-self-center ml-1 mr-0 my-1" src="/storage/member_images/{{$member->member_image}}" style="width:100px; height: 100px; border-radius: 50%;">
                            <div class="media-body pl-2 ">
                                    <a style="color:#ffd700;" href="/members/{{$member->id}}"><h5 class="my-2 pl-2">{{$member->full_name}}</h5></a>
                                    <small class="text-white pl-1">{{$member->preferred_committee}}</small>
                                    <small class="text-white pl-1">{{$member->name_of_group}}</small>
                                    <small class="text-white pl-1">{{$member->contact_number}}</small>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div  class="d-flex justify-content-center mt-4"> 
                    {{$members->links('vendor.pagination.bootstrap-4')}}
                </div>
            {{-- {{$members->links()}} --}}
        @else
            <p class="text-secondary ">no one is here yet</p>
        @endif
</div>
@endsection

