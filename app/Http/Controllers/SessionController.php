<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SessionController extends Controller
{
    public function adminDashboard()
    {
        $data = Asset::all();
        $totalAset = $data->count();
        $totalAsetBaik = $data->where('kondisi', 'baik')->count();
        $totalAsetRusakRingan = $data->where('kondisi', 'rusak_ringan')->count();
        $totalAsetRusakBerat = $data->where('kondisi', 'rusak_berat')->count();
        $totalAsetHilang = $data->where('kondisi', 'hilang')->count();
        return view('admin/dashboard',compact('data', 'totalAset', 'totalAsetBaik', 'totalAsetRusakRingan', 'totalAsetRusakBerat','totalAsetHilang'));    
    }

    public function manajemenAsetAdmin(){
        $data = Asset::all();
        return view('admin/manajemenAsset',compact('data'));
    }

    public function pengaturanAdmin(){
        return view('admin/pengaturan');
    }

    public function pengaturanAdminPost(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => [
            'required',
            'email',
            Rule::unique('users')->ignore(Auth::id())
        ],
        'password' => 'nullable|string|min:6'
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save(); //tidak error

    return redirect()->route('pengaturanAdmin')
                     ->with('success', "Data Anda berhasil diperbarui.");
    }
    public function penggunaAdmin(){
        $data = User::all();
        $totalUser = $data->count();
        $totalActive = $data->where('status', 'active')->count();
        $totalInactive = $data->where('status', 'non-active')->count();
        $totalPending = $data->where('status', 'pending')->count();

        return view('admin/pengguna',compact('data', 'totalUser', 'totalActive', 'totalInactive', 'totalPending'));
    }

    public function activateUser($id){
        $user = User::find($id);
        if ($user) {
            $user->status = 'active';
            $user->save();
            return redirect()->back()->with('success', 'User activated successfully.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }

    public function deactivateUser($id){
        $user = User::find($id);
        if ($user) {
            $user->status = 'non-active';
            $user->save();
            return redirect()->back()->with('success', 'User deactivated successfully.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }

    public function createUser(){
        return view('admin/createUser');
    }

    public function createUserPost(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required'  
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['status'] = 'active';
        
        $user= User::create($data);
        
         if ($user) {
        // Jika berhasil disimpan
        return redirect()->back()->with('success', 'User Berhasil di Tambahkan');
        } else {
        // Jika gagal disimpan
        return redirect()->back()->with('error', 'User Gagal diTambahkan');
        }
    }

    public function editUser($id){
        $user = User::find($id);
        if ($user) {
            return view('admin/editUser', compact('user'));
        }
        return redirect()->back()->with('error', 'User not found.');
    }

     public function editUserPost(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,$id",
            'password' => 'nullable|string|min:6',
            'role' => 'required|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        // Update password jika diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('editUser', $id)
                         ->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function userDashboard(){
        $data = Asset::all();
        return view('user/dashboard',compact('data'));
    }

    public function lihatAsetUser(){
        $data = Asset::all();
        return view('user/lihatAset',compact('data'));
    }

    public function pengaturanUser(){
        return view('user/pengaturan');
    }

    public function riwayatUser(){
        return view('user/riwayat');
    }
}