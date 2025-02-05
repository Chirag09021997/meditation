<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Host;
use App\Models\OurTeam;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\CustomerEvents;
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
        $team = OurTeam::select('id','name')->get();
        return view('event.create',compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) 
        {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/event', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }



        if ($request->hasFile('event_image')) 
        {
            $image = $request->file('event_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/eventImage', $fileName);
            $validated['event_image'] = str_replace('public/', 'storage/', $filePath);
        }

        if ($validated['fees'] == null) {
            unset($validated['fees']);
        }
        $finalValues = [];
        $teachValues = [];
        $inTitle = $validated['include_title'];
        $teacTitle = $validated['teaching_title'];

        foreach ($inTitle as $i => $val) 
        {
            if($val != null)
            {
             
            $finalValues[$i]['title'] = $val;
            $finalValues[$i]['description'] = $validated['include_description'][$i];
            if ($request->hasFile('include_image')) 
                {
                
                    $image = $request->file('include_image');
                    $fileName = time() . '_' . str_replace(' ', '_', $image[$i]->getClientOriginalName());
                    $filePath = $image[$i]->storeAs('public/uploads/Include', $fileName);
                    $finalValues[$i]['image'] = str_replace('public/', 'storage/', $filePath);
                    
                }
            }
            
        } 
        foreach ($teacTitle as $i => $val) 
        {
            if($val != null)
            {
                $teachValues[$i]['title'] = $val;
                $teachValues[$i]['description'] = $validated['teaching_description'][$i];
                if ($request->hasFile('teaching_image')) 
                    {
                    
                        $image = $request->file('teaching_image');
                        $fileName = time() . '_' . str_replace(' ', '_', $image[$i]->getClientOriginalName());
                        $filePath = $image[$i]->storeAs('public/uploads/Teaching', $fileName);
                        $teachValues[$i]['image'] = str_replace('public/', 'storage/', $filePath);
                        
                    }
            }
            
        } 

        $validated['include'] = json_encode($finalValues);
        $validated['teaching'] = json_encode($teachValues);

        $event = Event::create($validated);
        if($request->has('host_id')) 
        {
            foreach ($validated['host_id'] as $host)
            {
                $team =  array('event_id' => $event->id,'host_id' =>  $host );
                Host::create($team);
            }
        }

        return redirect()->route('event.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $customers = $event->customers()->get();
        return view('event.show', compact('event', 'customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $team = OurTeam::select('id','name')->get();
        $oldHost = Host::select('host_id','event_id')->where('event_id',$event->id)->pluck('host_id')->toArray();

        return view('event.edit', compact('event','team','oldHost'));
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
        if ($request->hasFile('event_image')) {
            
            $image = $request->file('event_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/eventImage', $fileName);
            $validated['event_image'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($validated['fees'] == null || $validated['is_paid'] == 'Off') {
            $validated['fees'] = 0.00;
        }

       
        $finalValues = [];
        $techValues = [];
        $inTitle = $validated['include_title'];

        if(isset($validated['include_image']))
        {

        }else{
            $validated['include_image'] = [];
        }

        foreach ($inTitle as $i => $val) 
        {
            if($val != null)
            {
                $finalValues[$i]['title'] = $val;
                $finalValues[$i]['description'] = $validated['include_description'][$i];

                if(key($validated['include_image']) == $i && ($validated['include_image'] != []))
                {
                    next($validated['include_image']);

                    if ($request->hasFile('include_image')) 
                    {
                    
                        $image = $request->file('include_image');
                        $fileName = time() . '_' . str_replace(' ', '_', $image[$i]->getClientOriginalName());
                        $filePath = $image[$i]->storeAs('public/uploads/Include', $fileName);
                        $finalValues[$i]['image'] = str_replace('public/', 'storage/', $filePath);
                        
                    }
                }
                else
                {
                    $oldImage = explode('storage',$event->include[$i]['image']);
                    $finalValues[$i]['image'] = "storage".$oldImage[1];

                }
            }
        } 
        $tecTitle = $validated['teaching_title'];

        if(isset($validated['teaching_image']))
        {

        }else{
            $validated['teaching_image'] = [];
        }
        foreach ($tecTitle as $j => $val) 
        {
            if($val != null)
            {
                $techValues[$j]['title'] = $val;
                $techValues[$j]['description'] = $validated['teaching_description'][$j];

                
                if(key($validated['teaching_image']) == $j && ($validated['teaching_image'] != []))
                {
                    next($validated['teaching_image']);

                    if ($request->hasFile('teaching_image')) 
                    {
                    
                        $image = $request->file('teaching_image');
                        $fileName = time() . '_' . str_replace(' ', '_', $image[$j]->getClientOriginalName());
                        $filePath = $image[$j]->storeAs('public/uploads/Teaching', $fileName);
                        $techValues[$j]['image'] = str_replace('public/', 'storage/', $filePath);
                        
                    }
                }
                else
                {
                    $oldImage = explode('storage',$event->teaching[$j]['image']);
                    $techValues[$j]['image'] = "storage".$oldImage[1];

                }
            }
        } 
        // exit;
        $validated['include'] = $finalValues;
        $validated['teaching'] = $techValues;

        $event->update($validated);
        if($request->has('host_id')) 
        {
            foreach ($validated['host_id'] as $host)
            {
                $team =  array('event_id' => $event->id,'host_id' =>  $host);
                $selteam = Host::where([
                    'event_id' => $event->id,
                    'host_id' => $host,
                ])->get();

                if(count($selteam) > 0 )
                {
                    Host::where([
                        'event_id' => $event->id,
                        'host_id' => $host,
                    ])->update($team);

                }else{
                    Host::create($team);

                }
            }
        }
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

    public function customerEventJoinList(string $id)
    {
        $event = Event::findOrFail($id);
        $customers = CustomerEvents::where('event_id', $id)->orderByDesc('created_at');
        return DataTables::of($customers)
            ->addColumn('custom', function ($data) use ($event) {
                return $data->person * $event->fees;
            })
            ->rawColumns(['custom'])
            ->addIndexColumn()
            ->toJson();
    }
}
