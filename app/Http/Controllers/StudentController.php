<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index(): View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mobile' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload foto
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads/students', $fileName, 'public');
            $validatedData['photo'] = $filePath;
        }

        Student::create($validatedData);
        return redirect('students')->with('flash_message', 'Student Added!');
    }

    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mobile' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = Student::find($id);

        // Proses upload foto baru jika ada
        if ($request->hasFile('photo')) {
            if ($student->photo && Storage::disk('public')->exists($student->photo)) {
                Storage::disk('public')->delete($student->photo);
            }

            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads/students', $fileName, 'public');
            $validatedData['photo'] = $filePath;
        }

        // Update hanya data valid
        $student->update($validatedData);

        return redirect('students')->with('flash_message', 'Student Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);

        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}
