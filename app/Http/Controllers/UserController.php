<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function create()
    {
        return view("backend.user.create");
    }

    public function store(Request $request)
    {
        $user = $this->userRepository->create($request);
        return redirect()->route('users.list');
    }

    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.update", compact("user"));
    }

    public function update(Request $request, $id)
    {
        $user = $this->userRepository->update($request,$id);
        return redirect()->route("users.list");
    }

    public function destroy($id)
    {
        $user = $this->userRepository->delete($id);
        return redirect()->route("users.list");
    }


}
