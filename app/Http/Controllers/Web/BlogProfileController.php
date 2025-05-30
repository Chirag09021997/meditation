<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogProfile;
use App\Http\Requests\StoreBlogProfileRequest;
use App\Http\Requests\UpdateBlogProfileRequest;
use Yajra\DataTables\Facades\DataTables;

class BlogProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog-profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogProfileRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/blogprofile', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        BlogProfile::create($validated);
        return redirect()->route('blog-profile.index')->with('success', 'Our Team created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogProfile $blogProfile)
    {
        return view('blog-profile.show', compact('blogProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogProfile $blogProfile)
    {
        return view('blog-profile.edit', compact('blogProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogProfileRequest $request, BlogProfile $blogProfile)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            if ($blogProfile->profile != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $blogProfile->profile);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/blogprofile', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        $blogProfile->update($validated);
        return redirect()->route('blog-profile.index')->with('success', 'Our Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogProfile $blogProfile)
    {
        $blogProfile->delete();
        echo 1;
    }

    public function getData()
    {
        $customers = BlogProfile::select('id', 'name', 'profile')->orderByDesc('created_at');
        return DataTables::of($customers)
            ->addColumn('action', function ($data) {
                $viewLink = $updateLink = $deleteLink = '';
                $viewLink = '<a href="' . route('blog-profile.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('blog-profile.edit', $data->id)  . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value = "' . route('blog-profile.destroy', $data->id)  . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('profile', function ($data) {
                return '<img src="' . $data->profile . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'profile'])
            ->addIndexColumn()
            ->toJson();
    }
}
