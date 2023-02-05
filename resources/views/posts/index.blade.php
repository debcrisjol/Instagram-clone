@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center m-5">
        @foreach ($posts as $post)
            <div class="row w-75 ">
                <div class="col-6 offset-3 ">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4 font-weight-bold text-center d-flex flex-column">


                <a class="font-weight-bold fs-3 text-center" href="/profile/{{ $post->user->id }}">
                    <span class="text-dark">{{ $post->user->username }}</span>
                </a>
                <p> {{ $post->caption }}</p>



            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
