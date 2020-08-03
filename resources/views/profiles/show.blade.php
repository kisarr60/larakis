@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-4 text-center">
            <img width="200px" src=" {{ $user->profile->getImage() }}" class="rounded-circle w-100" style="max-width: 230px">       
        </div>
        <div class="col-8">
            <div class="d-flex align-items-baseline">
                <div class="h4 mr-2 pt-3"> {{ $user->username }} </div>
                
            </div>
            <div class="d-flex my-4 ">
                <div class="mr-3">
                   <strong>{{$user->posts->count()}}</strong> publication(s)
                </div>
                <div class="mr-3">
                    <strong>90</strong> abonnés
                </div>
                <div class="mr-3">
                    <strong>5</strong> abonnements
                </div>
            </div>
            @can('update', $user->profile)
                <a href=" {{ route('profiles.edit', ['user' => $user->username])}} " class="btn btn-outline-secondary mt-2">Modifier mes informations de profil</a>
            @endcan
            <div class="mt-3">
                <div class="font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}.</div>
                <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @foreach($user->posts as $post)
        <div class="col-4 mb-4">
            <a href=" {{ route('posts.show', ['post' => $post->id])}} ">
                <img class="w-100" src=" {{ asset('storage') . '/' . $post->image }}" alt="">
            </a>
            
        </div>
        @endforeach
    </div>
</div>
@endsection
