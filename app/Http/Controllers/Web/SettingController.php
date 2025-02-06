<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('setting', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'address' => 'nullable|string',
            'mobile_no' => 'nullable|string',
            'mail' => 'nullable|email',
            'facebook_url' => 'nullable|string',
            'twitter_url' => 'nullable|string',
            'google_url' => 'nullable|string',
            'instagram_url' => 'nullable|string',
            'pinterest_url' => 'nullable|string',
            'youtube_url' => 'nullable|string',
            'map_url' => 'nullable|string',
            'about_thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // 2MB max file size
        ]);

        if ($request->hasFile('about_thumb')) {
            $settingThumb = Setting::where('key', 'about_thumb')->first();
            if ($settingThumb?->value != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $settingThumb->value);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('about_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/setting', $fileName);
            $validated['about_thumb'] = str_replace('public/', 'storage/', $filePath);
        }

        foreach ($validated as $key => $value) {
            if ($value !== null) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        }
        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
