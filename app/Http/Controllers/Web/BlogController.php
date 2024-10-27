<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/blog', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        Blog::create($validated);
        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            if ($blog->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $blog->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/blog', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        $blog->update($validated);
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        echo 1;
    }

    public function getData()
    {
        $blog = Blog::select(['id', 'name', 'thumb_image', 'total_view', 'status'])->orderByDesc('created_at');

        return DataTables::of($blog)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('blog.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('blog.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('blog.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('blog.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('thumb_image', function ($data) {
                return '<img src="' . $data->thumb_image . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'status', 'thumb_image'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Blog $blog)
    {
        $blog->status = ($blog->status == 'Active') ? 'Inactive' : 'Active';
        $blog->save();
        echo  1;
    }
}
