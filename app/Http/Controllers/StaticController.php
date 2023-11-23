<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function getMempelai(Request $request, $username) {
        try {
            $user = User::with("undangan.photos", "undangan.greetings", "undangan.gifts")->where("username", $username)->first();
            if (!$user) {
                return response()->json(["data" => null], 404);
            }
            return response()->json(["data" => $user]);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }

    public function storeGreeting(Request $request) {
        try {
            $greeting = new Greeting();
            $greeting->undangan_id = $request->undangan_id;
            $greeting->pronouncer = $request->pronouncer;
            $greeting->relation = $request->relation;
            $greeting->greeting = $request->greeting;
            $greeting->save();

            return response()->json(["data" => $greeting]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()], 400);
        }
    }
}
