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
        $clients = $this->repository->paginate(5);
        return view('clients.index',compact('clients'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
