@extends('layouts/app')

@section('content')

<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-body">
            @if (Auth::id() == $wishlist->user_id)
                <div class="mb-4">
                    <a href="/wishlists/{{ $wishlist->id }}/edit">
                        <button class="btn btn-primary">Lijstje aanpassen</button>
                    </a>
                    <a href="/wishlists">
                        <button class="btn btn-primary">Overzicht van al jouw lijstjes</button>
                    </a>
                </div>
            @endif
            <h1 class="text-center">{{ $wishlist->name }}</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <p>Lieve Sinterklaas,</p>
                    <p>{{ $wishlist->letter }}</p>
                    <p>Liefs, {{ $wishlist->user->name }}</p>
                </div>
            </div>
            <div class="card mb-4">
                <ul class="list-group list-group-flush">
                    <div id="wishes-list">
                        @include('wishes/index', ['wishlists' => [$wishlist]])
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection