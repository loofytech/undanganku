<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function getMempelai(Request $request, $username) {
        try {
            $user = User::with("undangan.photos")->where("username", $username)->first();
            if (!$user) {
                return response()->json(["data" => null], 404);
            }
            return response()->json(["data" => $user]);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }
}
