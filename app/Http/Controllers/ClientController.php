<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }


    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nama_client'=>'required',
            'alamat'=>'required',
            'nama_pic'=>'required',
            'bagian_pic'=>'required',
            'nomor_pic'=>'required'
        ]);

        $client->update([
            'nama_client' => $request->nama_client,
            'alamat' => $request->alamat,
            'nama_pic' => $request->nama_pic,
            'bagian_pic' => $request->bagian_pic,
            'nomor_pic' => $request->nomor_pic,
        ]);

        return redirect()->route('clients.index')->with('success', 'Data client berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_client'=>'required',
            'alamat'=>'required',
            'nama_pic'=>'required',
            'bagian_pic'=>'required',
            'nomor_pic'=>'required'
        ]);

        // $nextId = DB::select("SELECT 'PKF-' || LPAD(nextval('client_seq')::TEXT, 3, '0') AS id_client")[0]->id_client;
        // $nextId = DB::select("SELECT setval('client_seq', (SELECT COALESCE(MAX(SUBSTRING(id_client, 5)::INT), 0) FROM client))");
        $nextId = Client::generateID();
        
        Client::create([
            'id_client'=> $nextId,
            'nama_client'=> $request->nama_client,
            'alamat'=> $request->alamat,
            'nama_pic'=> $request->nama_pic,
            'bagian_pic'=> $request->bagian_pic,
            'nomor_pic'=> $request->nomor_pic,
        ]);

        return redirect()->route('clients.index')->with('success', 'Data client baru berhasil terbuat!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('success', 'Client data terhapus!');
    }    
}