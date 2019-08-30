@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col4">
            <img src="/svg/InstaJoe-logo.svg" style="width: 75px;">
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">ADD NEW POST</a>
            </div>
            <div><h2>{{ $user->profile->title }}</h2></div>
            <div d-flex flex-direction-col>
                <div><strong>234</strong>  posts</div>
                <div><strong>432</strong> followers</div>
                <div><strong>432</strong> following</div>
            </div>
            <div><h2>{{ $user->profile->description }}</h2></div>
            
            <div>
                {{  $user->profile->url ?? 'No link given.' }}    
            </div>
        </div>
    </div>
    <!-- new row -->
    <div class="row d-flex">
        <div class="col4">
            <img src="/svg/InstaJoe-logo.svg" style="max-width: 33%;">
        </div>
        <div class="col4">
            <img src="/svg/InstaJoe-logo.svg" style="max-width: 33%;">
        </div>
        <div class="col4">
            <img src="/svg/InstaJoe-logo.svg" style="max-width: 33%;">
        </div>
    </div>
</div>
@endsection


