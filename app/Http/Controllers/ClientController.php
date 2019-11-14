<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('clients.index', compact('clients'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate(['email' => 'required']);
        Client::create($request->all());
        return redirect()->route('clients.create')->with('success', 'Your Email has been registered in our Database, You will be notified as soon as possible ');
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return Response
     */
    public function show(Client $client)
    {
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Client $client
     * @return Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
