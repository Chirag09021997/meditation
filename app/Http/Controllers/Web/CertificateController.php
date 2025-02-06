<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Yajra\DataTables\Facades\DataTables;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/certificate', $fileName);
            $validated['image'] = str_replace('public/', 'storage/', $filePath);
        }
        Certificate::create($validated);
        return redirect()->route('certificate.index')->with('success', 'Certificates created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        return view('certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($certificate->image != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $certificate->image);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/certificate', $fileName);
            $validated['image'] = str_replace('public/', 'storage/', $filePath);
        }
        $certificate->update($validated);
        return redirect()->route('certificate.index')->with('success', 'Certificates updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        echo 1;
    }

    public function getData()
    {
        $certificate = Certificate::select(['id', 'image', 'status'])->orderByDesc('created_at');

        return DataTables::of($certificate)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('certificate.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('certificate.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('certificate.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('image', function ($data) {
                return '<img src="' . $data->image . '" alt="" class="w-8 mx-auto" />';
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('certificate.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status', 'image'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Certificate $certificate)
    {
        $certificate->status = ($certificate->status == 'Active') ? 'Inactive' : 'Active';
        $certificate->save();
        echo  1;
    }
}
