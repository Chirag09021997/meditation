<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PremiumPlan;
use App\Http\Requests\StorePremiumPlanRequest;
use App\Http\Requests\UpdatePremiumPlanRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PremiumPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('premium-plan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('premium-plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePremiumPlanRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_upload')) {
            $image = $request->file('thumb_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/premium-plan', $fileName);
            $validated['thumb_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        PremiumPlan::create($validated);
        return redirect()->route('premium-plan.index')->with('success', 'Premium Plan created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(PremiumPlan $premiumPlan)
    {
        return view('premium-plan.show', compact('premiumPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PremiumPlan $premiumPlan)
    {
        return view('premium-plan.edit', compact('premiumPlan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePremiumPlanRequest $request, PremiumPlan $premiumPlan)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_upload')) {
            if ($premiumPlan->thumb_upload != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $premiumPlan->thumb_upload));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/premium-plan', $fileName);
            $validated['thumb_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        $premiumPlan->update($validated);
        return redirect()->route('premium-plan.index')->with('success', 'Premium Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PremiumPlan $premiumPlan)
    {
        $premiumPlan->delete();
        echo 1;
    }

    public function getData()
    {
        $premiumPlans = PremiumPlan::select(['id', 'name', 'short_description', 'description', 'total_amount', 'discount', 'total_user', 'total_payable_amount',  'status']);

        return DataTables::of($premiumPlans)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('premium-plan.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('premium-plan.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('premium-plan.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('premium-plan.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(PremiumPlan $premiumPlan)
    {
        $premiumPlan->status = ($premiumPlan->status == 'Active') ? 'Inactive' : 'Active';
        $premiumPlan->save();
        echo  1;
    }
}
