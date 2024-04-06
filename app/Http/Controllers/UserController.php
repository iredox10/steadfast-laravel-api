<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        try {
            $user = User::create($request->all());
            return response()->json($user);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request->input('email'))->first();

            if ($user) {
                // You may want to implement additional authentication logic here
                return response()->json($user);
            } else {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function user($id)
    {
        try {
            $user = User::find($id);
            if ($user) {
                return response()->json($user);
            } else {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function users()
    {
        $users = User::all();
        echo $users;
    }

     public function updateRef(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            
            $user->chasisNumber = $request->input('chasisNumber');
            $user->status = $request->input('status');
            $user->transactionRef = $request->input('transactionRef');
            $user->paymentUrl = $request->input('paymentUrl');
            $user->paymentCode = $request->input('paymentCode');
            $user->payerRefNo = $request->input('payerRefNo');
            
            $user->save();
            
            return response()->json($user, 201);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }
}
