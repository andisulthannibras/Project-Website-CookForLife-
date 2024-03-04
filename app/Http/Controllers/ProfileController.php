<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; // Mengimpor Validator
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.all', compact('user'));
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $profile = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'email|unique:users,email,' . $profile->id, // Perbaiki menjadi $profile->id
            'alamat' => 'required|string',
        ]);

        // Periksa jika validasi gagal
        // if ($request->fails()) {
        //     return redirect()->back()->withErrors($validatedData)->withInput();
        // }

        try {
            $profile->update($validatedData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage())->withInput();
        }
        

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui');
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
            // 'email' => 'required|email|unique:users,email',
            // 'no_hp' => 'required|string|max:15',
        ]);

        $profile = User::create($validatedData);

        return response()->json(['message' => 'Profil berhasil ditambahkan']);
    }

    public function destroy($id)
    {
        $profile = User::findOrFail($id);
        $profile->delete();

        return response()->json(['message' => 'Profil berhasil dihapus']);
    }
}