<?php
namespace App\Http\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository{
    
    public function index(): Collection
    {
        return(User::get());
    }

    public function insert(array $userInfo): bool
    {
        unset($userInfo['_token']);
        unset($userInfo['confirm_password']);
        return User::insert($userInfo);
    }

    public function edit(int $id): object
    {
        return User::where('id', $id)->first();
    }

    public function update(array $updateData, int $id): bool
    {
        unset($updateData['_token'], $updateData['_method'], $updateData['confirm_password']);
        return User::where('id', $id)->update($updateData);
    }

    public function delete(int $id): bool
    {
        return User::where('id', $id)->delete();
    }
    
}
?>