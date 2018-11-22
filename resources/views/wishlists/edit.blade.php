@extends('layouts/app')

@section('content')
<script>
function addWish(event, wishlistID) {
    console.log("addWish() is fired");
    if (event.keyCode == 13) {
        console.log("keyCode is 13");
        //here i should make a string that contains all data I want to send to /wishes. Example: "new-wish=Koptelefoon&wishlist_id=2"
        var newWish = document.getElementById("new-wish").value;
        if (window.XMLHttpRequest) {
            console.log("XMLHttpRequest is available");
            var xhttp = new XMLHttpRequest();
        } else {
            console.log("XMLHttpRequest unavailable, user Active X Object instead");
            var xhttp = new ActiveXObject();
        }
        console.log("Is this reached?");
        xhttp.onreadystatechange = function() {
            console.log("xhttp state changed");
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("wishes-list").innerHTML = this.responseText;
            }                    
        }
        xhttp.open('GET', '/wishes/store?wishlist_id=' + wishlistID + '&name=' + newWish , true);
        xhttp.send();
    }   
}

function deleteWish() {
    alert("Check!");
}

</script>

<div class="container">
    <div class="card w-75 mx-auto">
        <div class="card-body">
            <input class="form-control text-center mb-4" type="text" placeholder="Geef je verlanglijstje een naam" value="{{ $wishlist->name }}">
            <div class="card mb-4">
                <div class="card-body">
                    <p>Lieve sinterklaas,</p>
                    <textarea class="form-control" placeholder="Schrijf een brief aan sinterklaas">{{ $wishlist->letter }}</textarea>
                    <p>Liefs, Dorieke</p>
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
                    <input class="form-control" type="text" value="https://www.ditwordteenlinkdiewerkt.nl">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection