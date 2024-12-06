<?php

namespace App\Http\Controllers;

use App\Http\Repository\UserRepository;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $userRepository = null;
    function __construct()
    {
        $this->userRepository = new UserRepository();
    }
    public function index(): View
    {
        $users = $this->userRepository->index();
        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        //
    }


    public function store(UserRequest $request)
    {
        $userInfo = $request->all();
        $password = $userInfo['password'];
        $hashedPassword = Hash::make($password);
        $userInfo['password'] = $hashedPassword;

        $userIsSave = $this->userRepository->insert($userInfo);
        if ($userIsSave) {
            return redirect('users')->with('success', 'User added successfully!');
        }
    }

    public function show($id)
    {
        //
    }


    public function edit(int $id): object
    {
        $user = $this->userRepository->edit($id);
        return response()->json($user);
    }


    public function update(UserRequest $request, $id)
    {
        $updateData = $request->all(); 
        if (isset($updateData['password']) && !empty($updateData['password'])) {

            $password = $updateData['password'];
            $hashedPassword = Hash::make($password);
            $updateData['password'] = $hashedPassword;
        } else {

            unset($updateData['password']);
            unset($updateData['confirm_password']);
        }
        $this->userRepository->update($updateData, $id);
        return redirect('users')->with('success', 'User updated successfully!');
    }



    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect('users')->with('success', 'User deleted successfully!');
    }
}
