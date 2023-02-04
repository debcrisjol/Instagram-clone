@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-3 p-5 ms-5">
                <img class="rounded-circle" style="max-width:150px;" src="{{ $user->profile->profileImage() }}" alt="logo">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-baseline">
                    <div class="d-flex flex-column">
                        <h2>{{ $user->username }}</h2>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                            @can('update', $user->profile)
                                <a href="/profile/{{ $user->id }}/edit" style="color:rgb(112, 124, 216)!important; font-size:15px; text-decoration:none; margin-top:10px;">
                                    <b>Edit Post</b>  </a>
                            @endcan
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create" style="color:palevioletred!important; font-size:15px; text-decoration:none;"> <b>Add
                                new Post</b></a>
                    @endcan
                </div>

                <div class="d-flex mt-2">
                    <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-4">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" alt="pic" class="w-75"></a>
                </div>
            @endforeach



        </div>
    </div>
@endsection
