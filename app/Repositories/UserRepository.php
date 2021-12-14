<?php

namespace App\Repositories;

use App\Models\User;
use function GuzzleHttp\Promise\all;

class UserRepository
{
    public function getAll()
    {
        $users = User::latest()->paginate(5);
        return $users;
    }

    public function create($request)
    {
        $data = $request->only('category','name','birthday','sex','phone','CMND','email','address');
        User::query()->create($data);
    }

    public function getById($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update($request, $id)
    {
        User::query()->findOrFail($id);
        $data = $request->only('category','name','birthday','sex','phone','CMND','email','address');
        return User::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
    }
}
