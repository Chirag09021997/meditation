<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/customer', $fileName);
            $validated['profile'] = str_replace('public/', 'storage/', $filePath);
        }
        Customer::create($validated);
        return redirect()->route('customer.index')->with('success', 'Customer created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $validated = $request->validated();
        if ($request->hasFile('profile')) {
            if ($customer->profile != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $customer->profile);
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
        $customer->update($validated);
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        echo 1;
    }

    public function getData()
    {
        $customers = Customer::select(['id', 'profile', 'name', 'country_name', 'mobile_no', 'email', 'business_category', 'dob'])->orderByDesc('created_at');
        return DataTables::of($customers)
            ->addColumn('action', function ($data) {
                $viewLink = $updateLink = $deleteLink = '';
                $viewLink = '<a href="' . route('customer.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('customer.edit', $data->id)  . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value = "' . route('customer.destroy', $data->id)  . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
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
