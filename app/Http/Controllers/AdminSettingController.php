<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog;

class AdminSettingController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/IndexSettingPage');
    }


    public function manageSettings()
    {
        $settings = Setting::first();

        return Inertia::render('Admin/IndexManageSettingPage', [
            'settings' => $settings
        ]);
    }


    public function updateSettings(Request $request)
    {
        $validatedData = $request->validate([
            'force_password_change' => ['boolean'],
            'password_expiry' => ['boolean'],
            'passwordless_login' => ['boolean'],
            'two_factor_authentication' => ['boolean'],
        ]);

        Setting::updateOrCreate([], $validatedData);

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

}
