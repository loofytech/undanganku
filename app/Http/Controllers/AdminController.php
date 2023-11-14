<?php

namespace App\Http\Controllers;

use App\Models\Undanganku;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index() {
        return view("dashboard.admin.index");
    }

    public function pengguna() {
        return view("dashboard.admin.pengguna");
    }

    public function penggunaData(Request $request) {
        try {
            $data = Undanganku::query();

            return DataTables::eloquent($data)->toJson();
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function penggunaCreate() {
        return view("dashboard.admin.create-pengguna");
    }

    public function penggunaStore(Request $request) {
        try {
            $undangan = new Undanganku();
            $undangan->user_id = 1;
            $undangan->male_name = $request->male_name;
            $undangan->male_nickname = $request->male_alias;
            $undangan->male_father_name = $request->male_father;
            $undangan->male_mother_name = $request->male_mother;
            $undangan->male_contact = $request->male_contact;
            $undangan->male_ig = $request->male_ig;
            $undangan->female_name = $request->female_name;
            $undangan->female_nickname = $request->female_alias;
            $undangan->female_father_name = $request->female_father;
            $undangan->female_mother_name = $request->female_mother;
            $undangan->female_contact = $request->female_contact;
            $undangan->female_ig = $request->female_ig;
            $undangan->akad_date = $request->akad_date;
            $undangan->akad_place = $request->akad_place;
            $undangan->resepsi_date = $request->resepsi_date;
            $undangan->resepsi_place = $request->resepsi_place;
            $undangan->backsound_link = $request->backsound_link;
            $undangan->save();

            return response()->json(["message" => "Undangan berhasil dibuat"]);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function penggunaEdit(Request $request, $id) {
        $undangan = Undanganku::where("id", $id)->first();
        if (!$undangan) {
            return abort(404);
        }
        return view("dashboard.admin.edit-pengguna", ["data" => $undangan]);
    }

    public function penggunaUpdate(Request $request, $id) {
        try {
            $undangan = Undanganku::where("id", $id)->first();
            if (!$undangan) {
                throw new \Exception("Data undangan tidak ditemukan");
            }

            $undangan->user_id = 1;
            $undangan->male_name = $request->male_name;
            $undangan->male_nickname = $request->male_alias;
            $undangan->male_father_name = $request->male_father;
            $undangan->male_mother_name = $request->male_mother;
            $undangan->male_contact = $request->male_contact;
            $undangan->male_ig = $request->male_ig;
            $undangan->female_name = $request->female_name;
            $undangan->female_nickname = $request->female_alias;
            $undangan->female_father_name = $request->female_father;
            $undangan->female_mother_name = $request->female_mother;
            $undangan->female_contact = $request->female_contact;
            $undangan->female_ig = $request->female_ig;
            $undangan->akad_date = $request->akad_date;
            $undangan->akad_place = $request->akad_place;
            $undangan->resepsi_date = $request->resepsi_date;
            $undangan->resepsi_place = $request->resepsi_place;
            $undangan->backsound_link = $request->backsound_link;
            $undangan->save();

            return response()->json(["message" => "Undangan berhasil diedit"]);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }
}
