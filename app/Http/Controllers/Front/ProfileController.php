<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('frontend.profile');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'profile' => 'nullable|image|max:2048',
            'country_name' => 'nullable|string',
            'mobile_no' => 'nullable|string',
            'business_category' => 'nullable|string',
            'dob' => 'nullable|date_format:Y-m-d',
        ]);
        $user = Auth::guard('customer')->user();
        if ($request->hasFile('profile')) {
            if ($user->profile != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $user->profile));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/profile', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        $user->fill($validated)->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
