@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-3 p-5 ms-5">
                <img class="rounded-circle" style="max-width:150px;" src="/img/download.jpeg" alt="logo">
            </div>
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-baseline">
                    <h1>{{$user->username}}</h2>
                   <a href="" style="color:palevioletred!important; font-size:15px; text-decoration:none;"> Add new Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-2"><strong>153</strong> posts</div>
                    <div class="pr-2"><strong>23K</strong> followers</div>
                    <div class="pr-2"><strong>212</strong> folowing</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="">{{$user->profile->url}}</a></div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-4">
                <img src="/img/download.jpeg"  alt="pic" class="w-75">
            </div>
            <div class="col-4">
                <img src="/img/download.jpeg"  alt="pic" class="w-75">
            </div>
            <div class="col-4">
                <img src="/img/download.jpeg"  alt="pic" class="w-75">
            </div>



        </div>
    </div>
@endsection
