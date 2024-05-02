<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Network::orderBy('id', 'DESC')->get();
        return view('admin.networks.index', [
            'networks' => $networks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $network = new Network();
        return view('admin.networks.form', [
            'network' => $network,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Network $network)
    {
        $network->create([
            'name' => $request['name'],
            'count' => $request['count'],
        ]);

        return redirect()->route('networks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Network $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Network $network)
    {
        return view('admin.networks.form', [
            'network' => $network,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Network $network)
    {

        $network->update([
            'name' => $request['name'],
            'count' => $request['count'],
        ]);

        return redirect()->route('networks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Network $network)
    {
        $network->delete();
        return redirect()->route('networks.index');
    }
}
