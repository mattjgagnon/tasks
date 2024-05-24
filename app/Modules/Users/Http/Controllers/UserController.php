<?php

namespace App\Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Users\Http\Requests\UserRequest;
use App\Modules\Users\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

final class UserController extends Controller
{
    public function index(): Collection
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function store(UserRequest $request)
    {
        return User::create($request->validated());
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());
        return $user;
    }

    public function destroy($id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}
