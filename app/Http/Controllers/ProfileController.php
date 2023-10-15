<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ProfileController extends Controller
{

    // public function show($id)
    // {
    // $user = User::findOrFail($id);
    // return response()->json($user);
    // }
    
    // public function update(Request $request, $id)
    // {
    // $user = User::findOrFail($id);

    // $validatedData = $request->validate([
    //     'name' => 'string|max:255',
    //     'alamat' => 'required|string',
    //     'email' => 'email|unique:users,email,'.$user->id,
    //     'no_hp' => 'required|string',
    //     // Tambahkan aturan validasi lain sesuai kebutuhan
    // ]);

    // $user->update($validatedData);

    // return response()->json(['message' => 'Profil berhasil diperbarui']);
    // }
    public function index()
{
    $profiles = User::all();
    return view('/'); 
}

public function show($id)
{
    $profile = User::findOrFail($id);
    return response()->json($profile);
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'email' => 'required|email|unique:profiles,email',
        'no_hp' => 'required|string|max:15',
    ]);

    $profile = User::create($validatedData);

    return response()->json(['message' => 'Profil berhasil ditambahkan']);
}

public function update(Request $request, $id)
{
    $profile = User::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'email' => 'required|email|unique:profiles,email,'.$profile->id,
        'no_hp' => 'required|string|max:15',
    ]);

    $profile->update($validatedData);

    return response()->json(['message' => 'Profil berhasil diperbarui']);
}

public function destroy($id)
{
    $profile = User::findOrFail($id);
    $profile->delete();

    return response()->json(['message' => 'Profil berhasil dihapus']);
}
}