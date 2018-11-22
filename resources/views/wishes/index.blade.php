@foreach($wishlists as $wishlist)
    @foreach($wishlist->wishes as $wish)
        <li class="list-group-item">
            {{ $wish->name }}
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </li>
    @endforeach
@endforeach

