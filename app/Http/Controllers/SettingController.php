<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
class SettingController extends Controller
{
    // public function index()
    // {
    //     return view('backend.setting.setting'); // Ganti 'lkbb' dengan nama view Anda
    // }
    public function edit()
    {
        // Mengambil pengaturan pertama dari database atau membuat instance baru jika belum ada
        $settings = Settings::first() ?? new Settings();
        return view('backend.setting.edit', ['settings' => $settings]);
    }

    public function update(Request $request)
    {
        // Mengambil pengaturan pertama dari database atau membuat instance baru jika belum ada
        $settings = Settings::first() ?? new Settings();
        $settings->update([
            'beranda' => $request->has('beranda'),
            'nilai' => $request->has('nilai'),
            'nilaiakhir' => $request->has('nilaiakhir'),
        ]);

        return redirect()->route('backend.setting.update')->with('success', 'Settings updated successfully.');
    }
}
