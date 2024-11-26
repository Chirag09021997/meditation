<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use Yajra\DataTables\Facades\DataTables;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('notification.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotificationRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/notification', $fileName);
            $validated['image'] = str_replace('public/', 'storage/', $filePath);
        }
        Notification::create($validated);
        return redirect()->route('notification.index')->with('success', 'Notification created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        return view('notification.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        return view('notification.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($notification->image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $notification->image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/notification', $fileName);
            $validated['image'] = str_replace('public/', 'storage/', $filePath);
        }
        $notification->update($validated);
        return redirect()->route('notification.index')->with('success', 'Notification updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();
        echo 1;
    }

    public function getData()
    {
        $notifications = Notification::select(['id', 'title', 'image', 'status'])->orderByDesc('created_at');

        return DataTables::of($notifications)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('notification.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('notification.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('notification.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('notification.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('image', function ($data) {
                return '<img src="' . $data->image . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'status', 'image'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Notification $notification)
    {
        $notification->status = ($notification->status == 'Active') ? 'Inactive' : 'Active';
        $notification->save();
        echo  1;
    }
}
