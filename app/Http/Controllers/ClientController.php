<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\Clients;

class ClientController extends Controller
{
    // READ //
    public function show()
    {
        return view('client.view');
    }

    // CREATE //
    public function store($request)
    {
        $client = Clients();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->save();    
    }

    // UPDATE //
    public function update($request)
    {
        $client = Clients::findOrFail($request->id);
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->save();    
    }

    // DELETE //
    public function delete($request)
    {
        $client = Clients::findOrFail($request->id);
        $client->destroy();
    }
}
