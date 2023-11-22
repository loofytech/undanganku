<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function getMempelai(Request $request, $username) {
        try {
            $user = User::with("undangan.photos", "undangan.greetings")->where("username", $username)->first();
            if (!$user) {
                return response()->json(["data" => null], 404);
            }
            return response()->json(["data" => $user]);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }

    public function storeGreeting(Request $request, $undanganId) {
        try {
            
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }
}
