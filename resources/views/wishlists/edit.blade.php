@extends('layouts/app')

@section('content')
<script>
function editName(event, wishlistID) {
    if (event.keyCode == 13) {
        var wishlistTitle = document.getElementById('wishlist-title').value;
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        } else {
            var xhttp = new ActiveXObject();
        }
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('wishlist-title').value = this.responseText;
            }                    
        }
        xhttp.open('GET', '/wishlists/' + wishlistID + '/update?name=' + wishlistTitle, true);
        xhttp.send();
    }
}

function editLetter(event, wishlistID) {
    if (event.keyCode == 13) {
        var wishlistLetter = document.getElementById('wishlist-letter').value;
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        } else {
            var xhttp = new ActiveXObject();
        }
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('wishlist-letter').value = this.responseText;
            }                    
        }
        xhttp.open('GET', '/wishlists/' + wishlistID + '/update?letter=' + wishlistLetter, true);
        xhttp.send();
    }
}

function addWish(event, wishlistID) {
    if (event.keyCode == 13) {
        var newWish = document.getElementById("new-wish").value;
        if (window.XMLHttpRequest) {
            var xhttp = new XMLHttpRequest();
        } else {
            var xhttp = new ActiveXObject();
        }
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("wishes-list").innerHTML = this.responseText;
            }                    
        }
        xhttp.open('GET', '/wishes/store?wishlist_id=' + wishlistID + '&name=' + newWish , true);
        xhttp.send();
    }   
}

function deleteWish(wishID) {
    if (window.XMLHttpRequest) {
        var xhttp = new XMLHttpRequest();
    } else {
        var xhttp = new ActiveXObject();
    }
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("wishes-list").innerHTML = this.responseText;
        }                    
    }
    xhttp.open('GET', '/wishes/' + wishID + '/delete' , true);
    xhttp.send();
}

</script>

<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-body">
            @if (Auth::id() == $wishlist->user_id)
            <div class="mb-4">
                <a href="/wishlists/{{ $wishlist->id }}">
                    <button class="btn btn-primary">Bekijk hoe anderen jouw lijstje zien</button>
                </a>
                <a href="/wishlists">
                    <button class="btn btn-primary">Overzicht van al jouw lijstjes</button>
                </a>
            </div>
            <input id="wishlist-title" class="form-control text-center mb-4" type="text" placeholder="Geef je verlanglijstje een naam" value="{{ $wishlist->name }}" onkeyup="editName(event, {{ $wishlist->id }})">
            <div class="card mb-4">
                <div class="card-body">
                    <p>Lieve sinterklaas,</p>
                    <textarea id="wishlist-letter" class="form-control" placeholder="Schrijf een brief aan sinterklaas" onkeyup="editLetter(event, {{ $wishlist->id }})">{{ $wishlist->letter }}</textarea>
                    <p>Liefs, {{ $wishlist->user->name }}</p>
                </div>
            </div>
            <div class="card mb-4">
                <ul class="list-group list-group-flush">
                    <div id="wishes-list">
                        @include('wishes/index', ['wishlists' => [$wishlist]])
                    </div>
                    <li class="list-group-item">
                        <input id="new-wish" class="form-control" type="text" placeholder="Voeg iets toe" onkeyup="addWish(event, {{ $wishlist->id }})">
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>Gebruik deze link om je lijstje te delen:</p>
                    <input class="form-control" type="text" value="{{ $_SERVER['SERVER_NAME'] }}/wishlists/{{ $wishlist->id }}">
                </div>
            </div>
            @else
            Je mag dit verlanglijstje niet aanpassen. Je kunt hem wel <a href="/wishlists/{{ $wishlist->id }}">bekijken.</a>
            @endif
        </div>
    </div>
</div>
@endsection