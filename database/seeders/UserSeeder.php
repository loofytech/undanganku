<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $u = new User();
        $u->name = "Administrator";
        $u->username = "admin";
        $u->email = "admin@undanganku.com";
        $u->email_verified_at = Carbon::now();
        $u->password = Hash::make("admin");
        $u->role = 1;
        $u->save();

        // User
        $u = new User();
        $u->name = "Agung Ardiyanto";
        $u->username = "agungd3v";
        $u->email = "agungd3v@gmail.com";
        $u->email_verified_at = Carbon::now();
        $u->password = Hash::make("gobloklo");
        $u->role = 2;
        $u->save();
    }
}
