<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Batasi tipe dan ukuran gambar sesuai kebutuhan Anda.
        ]);
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();

        $path = $image->storeAs('public/image', $filename);
        
        $imageData = new Image();
        $imageData->filename = $filename;
        $imageData->save();

        return response()->json(['message' => 'Gambar berhasil diunggah']);
    }
}