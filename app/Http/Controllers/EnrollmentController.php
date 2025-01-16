<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\View\View;
use Carbon\Carbon;

class EnrollmentController extends Controller
{

    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);
    }


    public function create()
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name', 'id');
        return view('enrollments.create', compact('batches', 'students'));
        // return view('enrollments.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();

        // Konversi format tanggal dari d-m-Y ke Y-m-d
        if ($request->has('join_date')) {
            $input['join_date'] = Carbon::createFromFormat('d-m-Y', $request->join_date)->format('Y-m-d');
        }

        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrolment Addedd!');
    }


    public function show(string $id)
    {
        $enrollment = Enrollment::with(['student', 'batch'])->findOrFail($id); // Load relasi student dan batch
        return view('enrollments.show')->with('enrollments', $enrollment);

        // $enrollment = Enrollment::with('student')->findOrFail($id); // Eager load student
        // return view('enrollments.show')->with('enrollments', $enrollment);

        // $enrollments = Enrollment::find($id);
        // return view('enrollments.show')->with('enrollments', $enrollments);
    }


    public function edit(string $id)
    {
        // return view('enrollments.edit')->with('enrollments', $enrollments);
        $enrollments = Enrollment::find($id);
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('enrollments.edit', compact('enrollments','batches', 'students'));
    }


    public function update(Request $request, string $id)
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();

        // Konversi format tanggal dari d-m-Y ke Y-m-d
        if ($request->has('join_date')) {
            $input['join_date'] = Carbon::createFromFormat('d-m-Y', $request->join_date)->format('Y-m-d');
        }

        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!');
    }


    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}
