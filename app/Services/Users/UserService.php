<?php

namespace App\Services\Users;

use App\User;

class UserService
{
    protected $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function browse()
    {
        return $this->model->whereHas('roles', function ($query) {
            return $query->where('name', '!=', 'member');
        })->paginate();
    }

    public function getMember()
    {
        return $this->model->role("member")->paginate();
    }

    public function getAdmin()
    {
        return $this->model->role("admin")->get();
    }

    public function getSeller()
    {
        return $this->model->role("seller")->get();
    }

    public function read($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($payload)
    {
        $user = $this->model->create($payload);
        $user->assignRole($payload["roles"]);
        return $user;
    }

    public function update($id, $payload)
    {
        $user = $this->read($id);
        $user->update($payload);
        return $user;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
