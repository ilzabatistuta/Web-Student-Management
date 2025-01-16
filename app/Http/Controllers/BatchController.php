<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon; // Tambahkan di bagian atas controller

class BatchController extends Controller
{

    public function index(): View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches', $batches);
    }

    public function create(): View
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));
        //return view('batches.create');
    }


    public function store(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|integer',
            'start_date' => 'required|date_format:d-m-Y', // Validasi format Indonesia
        ]);


        $input = $request->all();

        // Konversi format tanggal dari d-m-Y ke Y-m-d sebelum disimpan
        if ($request->has('start_date')) {
            $input['start_date'] = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        }

        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');
    }

    public function show(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    public function edit(string $id): View
    {
        // $batches = Batch::find($id);
        // return view('batches.edit')->with('batches', $batches);

        $batches = Batch::findOrFail($id); // Ambil batch berdasarkan ID
        $courses = Course::pluck('name', 'id'); // Ambil semua course (id => name)
        return view('batches.edit', compact('batches', 'courses')); // Kirim data ke view
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $batches  = Batch::find($id);
        $input = $request->all();

        // Konversi format tanggal dari d-m-Y ke Y-m-d sebelum disimpan
        if ($request->has('start_date')) {
            $input['start_date'] = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        }


        $batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');
    }
}
