<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('store.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStoreRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('product_thumb')) {
            $image = $request->file('product_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/store', $fileName);
            $validated['product_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        $store = Store::create($validated);
        if ($request->hasFile('product_photos')) {
            foreach ($request->file('product_photos') as $photo) {
                $fileName = time() . '_' . str_replace(' ', '_', $photo->getClientOriginalName());
                $filePath = $photo->storeAs('public/uploads/product', $fileName);
                ProductPhoto::create([
                    'store_id' => $store->id,
                    'url' => str_replace('public/', 'storage/', $filePath),
                ]);
            }
        }
        return redirect()->route('store.index')->with('success', 'Store created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        $productPhotos = $store->productPhotos;
        return view('store.show', compact('store', 'productPhotos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        $productPhotos = $store->productPhotos;
        return view('store.edit', compact('store', 'productPhotos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreRequest $request, Store $store)
    {
        $validated =  $request->validated();
        if ($request->hasFile('product_thumb')) {
            if ($store->product_thumb != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $store->product_thumb));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('product_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/store', $fileName);
            $validated['product_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('product_photos')) {
            foreach ($request->file('product_photos') as $photo) {
                $fileName = time() . '_' . str_replace(' ', '_', $photo->getClientOriginalName());
                $filePath = $photo->storeAs('public/uploads/product', $fileName);
                ProductPhoto::create([
                    'store_id' => $store->id,
                    'url' => str_replace('public/', 'storage/', $filePath),
                ]);
            }
        }
        $store->update($validated);
        return redirect()->route('store.index')->with('success', 'Store updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        $store->delete();
        echo 1;
    }


    public function getData(Request $request)
    {
        $store = Store::select(['id', 'product_name', 'product_thumb', 'price', 'total_stock', 'total_sale', 'discount', 'status'])->orderByDesc('created_at');

        return DataTables::of($store)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('store.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('store.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('store.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('store.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('product_thumb', function ($data) {
                return '<img src="' . $data->product_thumb . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'status', 'product_thumb'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Store $store)
    {
        $store->status = ($store->status == 'Active') ? 'Inactive' : 'Active';
        $store->save();
        echo  1;
    }

    public function deleteProductPhoto(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:product_photos,id',
        ]);
        $photo = ProductPhoto::findOrFail($request->id);
        if ($photo->url != null) {
            $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $photo->url));
            if (file_exists($imagePath)) {
                unlink($imagePath);
            } else {
                return response()->json(['status' => false, 'message' => 'File not found.'], 404);
            }
        }
        $photo->delete();
        return response()->json(['status' => true, 'message' => 'Product photo deleted successfully.']);
    }
}
