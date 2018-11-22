@extends('layouts/app')

@section('content')
<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-body">
            <input class="form-control text-center mb-4" type="text" placeholder="Geef je verlanglijstje een naam" value="{{ $wishlist->name }}">
            <div class="card mb-4">
                <div class="card-body">
                    <p>Lieve sinterklaas,</p>
                    <textarea class="form-control" placeholder="Schrijf een brief aan sinterklaas">Dit is mijn verlanglijstje.</textarea>
                    <p>Liefs, Dorieke</p>
                </div>
            </div>
            <div class="card mb-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Item 1
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        Item 2
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <form>
                            <input class="form-control" type="text" placeholder="Voeg iets toe">
                        </form>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>Gebruik deze link om je lijstje te delen:</p>
                    <input class="form-control" type="text" value="https://www.ditwordteenlinkdiewerkt.nl">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection