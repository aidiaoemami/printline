<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Users\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new UserService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->service->browse();
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = $this->service->create($request->toArray());
        if ($user) {
            return redirect()->route('users.index')->with('message', 'Data Berhasil di Simpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->service->read($id);
        return view("users.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->service->read($id);
        return view("users.update", "user");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = $this->service->update($id, $request->toArray());
        if ($use) {
            return redirect()->route('users.index')->with('message', 'Data Berhasil di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->service->delete($id);
        if ($user) {
            return redirect()->route('users.index')->with('message', 'Data Berhasil di Hapus');
        }
    }
}
