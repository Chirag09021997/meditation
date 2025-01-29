<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use App\Http\Requests\StoreOurTeamRequest;
use App\Http\Requests\UpdateOurTeamRequest;
use Yajra\DataTables\Facades\DataTables;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('our-team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('our-team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurTeamRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/customer', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        OurTeam::create($validated);
        return redirect()->route('our-team.index')->with('success', 'Our Team created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurTeam $ourTeam)
    {
        return view('our-team.show', compact('ourTeam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $ourTeam)
    {
        return view('our-team.edit', compact('ourTeam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOurTeamRequest $request, OurTeam $ourTeam)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            if ($ourTeam->profile != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $ourTeam->profile);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/customer', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        $ourTeam->update($validated);
        return redirect()->route('our-team.index')->with('success', 'Our Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $ourTeam)
    {
        $ourTeam->delete();
        echo 1;
    }

    public function getData()
    {
        $customers = OurTeam::select('id', 'name', 'profile', 'post', 'speciality', 'experience', 'phone_no', 'trainers_skill')->orderByDesc('created_at');
        return DataTables::of($customers)
            ->addColumn('action', function ($data) {
                $viewLink = $updateLink = $deleteLink = '';
                $viewLink = '<a href="' . route('our-team.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('our-team.edit', $data->id)  . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value = "' . route('our-team.destroy', $data->id)  . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
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
