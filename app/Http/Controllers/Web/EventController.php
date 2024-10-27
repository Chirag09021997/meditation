<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/event', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($validated['fees'] == null) {
            unset($validated['fees']);
        }
        Event::create($validated);
        return redirect()->route('event.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            if ($event->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $event->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/event', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($validated['fees'] == null || $validated['is_paid'] == 'Off') {
            $validated['fees'] = 0.00;
        }
        $event->update($validated);
        return redirect()->route('event.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        echo 1;
    }

    public function getData()
    {
        $event = Event::select(['id', 'name', 'thumb_image', 'starting_date', 'location', 'is_paid', 'fees', 'status'])->orderByDesc('created_at');

        return DataTables::of($event)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('event.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('event.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('event.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('event.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('thumb_image', function ($data) {
                return '<img src="' . $data->thumb_image . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'status', 'thumb_image'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Event $event)
    {
        $event->status = ($event->status == 'Active') ? 'Inactive' : 'Active';
        $event->save();
        echo  1;
    }
}
