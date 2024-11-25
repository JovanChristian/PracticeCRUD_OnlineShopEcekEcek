<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Item;
use Illuminate\Http\Request;

class Clients extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('items')->get();
        return view("clients.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        return view("clients.create", compact("items"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'require',
            'email' => 'required|unique:clients',
            'phone',
            'address',
            'item_id',
        ]);
        Client::create(Request::all());
        return redirect()->route('clients.index')->with('success','Data Client Success Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $items = Item::all();
        return view('clients.edit', compact('items', 'client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients)
    {
        $request->validate([
            'name' => 'require',
            'email' => 'required|unique:clients, email'.$clients->id,
            'phone',
            'address',
            'item_id',
        ]);
        $clients->update($request::all());
        return redirect()->route('clients.index')->with('success','Data Client Success Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $clients)
    {
        $clients->delete();
        return redirect()->route('clients.index')->with('success','Data Client Success Deleted');
    }
}
