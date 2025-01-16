<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $input = $request->all();
        // Teacher::create($input);
        // return redirect('teachers')->with('flash_message', 'Teacher Addedd!');

        // Validasi data yang diterima
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mobile' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload foto jika ada
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads/teachers', $fileName, 'public');
            $validatedData['photo'] = $filePath;
        }

        // Simpan data Teacher ke database
        Teacher::create($validatedData);

        return redirect('teachers')->with('flash_message', 'Teacher Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // $teachers = Teacher::find($id);
        // $input = $request->all();
        // $teachers->update($input);
        // return redirect('teachers')->with('flash_message', 'Teacher Updated!');

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'mobile' => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $teacher = Teacher::find($id);

        // Proses upload foto baru jika ada
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($teacher->photo && Storage::disk('public')->exists($teacher->photo)
            ) {
                Storage::disk('public')->delete($teacher->photo);
            }

            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $filePath = $request->file('photo')->storeAs('uploads/teachers', $fileName, 'public');
            $validatedData['photo'] = $filePath;
        }

        // Update data Teacher
        $teacher->update($validatedData);

        return redirect('teachers')->with('flash_message', 'Teacher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!');
    }
}
