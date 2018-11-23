<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wishlists/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $properties = ['name' => 'Nieuw verlanglijstje', 'user_id' => Auth::id(), 'letter' => 'Hieronder ziet u mijn verlanglijstje.'];
        $wishlist = Wishlist::create($properties);
        return redirect("/wishlists/$wishlist->id/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        return view('/wishlists/show', ['wishlist' => $wishlist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        return view('wishlists/edit', ['wishlist' => $wishlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        if (request('name')) {
            $validated = request()->validate([
                'name' => ['required']
            ]);
    
            $wishlist->update($validated);
    
            return $validated['name'];
        } elseif (request('letter')) {
            $validated = request()->validate([
                'letter' => ['required']
            ]);
    
            $wishlist->update($validated);
    
            return $validated['letter'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
