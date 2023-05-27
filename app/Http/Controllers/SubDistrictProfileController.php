<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubDistrictProfileController extends Controller
{
    public function index(){
        $data = array(
            'menu' => 'subdisctrictprofile',
            'submenu' => ''
            );
        return view('admin.jenisprodukadmin', $data);
    }

    public function indexdata(){
        $subdisctrictprofile = DB::table('sub_district_profile')->get();
        $data = array(
            'menu' => 'subdisctrictprofile',
            'submenu' => 'subdisctrictprofile',
            'subdisctrictprofile' => $subdisctrictprofile
            );
        return view('admin.jenisprodukadmin', $data);
    }

    public function indexupdateSubProfile(){
        $subdisctrictprofile = DB::table('sub_district_profiles')->get();
        $data = array(
            'menu' => 'subdisctrictprofile',
            'submenu' => 'subdisctrictprofile',
            'subdisctrictprofile' => $subdisctrictprofile
        );
        // dd($data);
        return view('user.subdistrict.subdistrictdata', $data);
    }

    public function updateSubProfile(Request $post){
        $lala = DB::table('sub_district_profiles')->update([
            'id' => '1',
            'id_user' => '2',
            'id_kecamatan' => $post->id_kecamatan,
            'kode_kecamatan' => $post->kode_kecamatan,
            'nama_camat' => $post->nama_camat,
            'telp_camat' => $post->telp_camat,
            'alamat' => $post->alamat,
            'email' => $post->email,
            'kodepos' => $post->kodepos,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    return redirect('/subprofil/editsubprofil');
    }
}
