<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientPostRequest;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('index',['clients' => $clients]);
    }

    public function newClient(){
        return view('new');
    }

    public function saveClient(ClientPostRequest $request)
    {
        $cli = new Client();
        $cli->firstName = $request->firstName;
        $cli->lastName = $request->lastName;
        $cli->coments = strrev($request->coments);
        $cli->save();

        return redirect('/')->with('msg', 'Client was created Successfully');
    }

    public function editClient($id)
    {
        return view('new', ['client' => Client::find($id)]);
    }

    public function updateClient(ClientPostRequest $request, $id)
    {
        $cli = Client::find($id);
        $cli->firstName = $request->firstName;
        $cli->lastName = $request->lastName;
        $cli->coments = $cli->regra1($request->coments);
        $cli->save();
        return redirect('/')->with('msg', 'Client was updated Successfully');
    }

    public function deletClient($id){
        Client::find($id)->delete();
        return redirect('/')->with('msg', 'Client was deleted Successfully');
    }
}

