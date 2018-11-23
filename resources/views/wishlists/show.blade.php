@extends('layouts/app')

@section('content')

<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-body">
            <h1 class="text-center">{{ $wishlist->name }}</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <p>Lieve sinterklaas,</p>
                    <p>{{ $wishlist->letter }}</p>
                    <p>Liefs, Dorieke</p>
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