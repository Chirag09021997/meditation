<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function show(string $id)
    {
        $contactUs = ContactUs::findOrFail($id);
        return view('contact.show', compact('contactUs'));
    }

    public function getData()
    {
        $contactUs = ContactUs::select(['id', "name", "email", "mobile_no"])->orderByDesc('created_at');
        return DataTables::of($contactUs)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('contact-us.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $deleteLink = '<a data-value="' . route('contact-us.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer px-2"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink $deleteLink </div>";
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->toJson();
    }

    public function destroy(string $id)
    {
        $contactUs = ContactUs::findOrFail($id);
        $contactUs->delete();
        echo 1;
    }
}
