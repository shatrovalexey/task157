<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
		try {
			$validatedData = $request->validate([
				'name' => 'string'
				, 'email' => 'required|email|unique:users|max:255'
				, 'password' => 'required|min:6'
				, 'gender' => 'nullable|int',
			]);
		} catch (\Exception $exception) {
	        return response()->json(['message' => $exception->getMessage(), 'success' => false,]);
		}

        $user = User::create($validatedData);

        return response()->json(['message' => 'Успех', 'success' => true,]);
    }
}