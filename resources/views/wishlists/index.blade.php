@extends('layouts/app')

@section('content')
<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-header text-center">
            <h3>Jouw verlanglijstjes</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach(Auth::user()->wishlists as $wishlist)
                    <a href="/wishlists/{{ $wishlist->id }}">
                        <li class="list-group-item">
                            {{$wishlist->name}}
                        </li>    
                    </a>                
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection