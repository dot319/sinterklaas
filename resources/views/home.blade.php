@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welkom {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mb-3">Wat wil je doen?</div>
                    <div class="d-inline-block">
                        <div class="mb-3">
                            <a href="/wishlists/store">
                                <button class="btn btn-primary btn-lg btn-block">Maak een nieuw lijstje</button>
                            </a>                           
                        </div>
                        <div>
                            <a href="/wishlists">
                                <button class="btn btn-primary btn-lg btn-block">Bekijk jouw lijstjes</button>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
