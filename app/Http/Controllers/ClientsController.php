<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        return view('admin.clients.index');
    }
    public function getClients(){
        return Client::paginate(5);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Client $client)
    {
        //
    }


    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return $client;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function desactive($id)
    {
        $teste = array('status' => 1);
        $this->repository->update($teste, $id);
    }
}
