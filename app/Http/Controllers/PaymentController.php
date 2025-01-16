<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Payment;
use Illuminate\View\View;
use Carbon\Carbon;


class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments', $payments);
    }


    public function create()
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create', compact('enrollments'));
    }


    public function store(Request $request)
    {
        $input = $request->all();

        // Konversi format tanggal dari d-m-Y ke Y-m-d
        if ($request->has('paid_date')) {
            $input['paid_date'] = Carbon::createFromFormat('d-m-Y', $request->paid_date)->format('Y-m-d');
        }

        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payment Addedd!');
    }


    public function show(string $id)
    {
        // $payments = Payment::find($id);
        // return view('$payments.show')->with('$payments ', $payments);

        $payments = Payment::with('enrollment')->findOrFail($id); // Ensure relation is loaded
        return view('payments.show', compact('payments'));
    }


    public function edit(string $id)
    {
        // $payments = Payment::find($id);
        // $enrollments = Enrollment::pluck('enroll_no', 'id');
        // return view('payments.edit')->with('payments', 'enrollments');

        // $payments = Payment::findOrFail($id);
        // $enrollments = Enrollment::pluck('enroll_no', 'id');
        // return view('payments.edit', compact('payments', 'enrollments'));

        $payments = Payment::findOrFail($id); // Data payment yang ingin diedit
        $enrollments = Enrollment::pluck('enroll_no', 'id'); // Enrollment data untuk dropdown
        return view('payments.edit', compact('payments', 'enrollments'));
    }


    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'paid_date' => 'required|date_format:d-m-Y',
            'amount' => 'required|numeric',
        ]);

        $payments = Payment::findOrFail($id);

        // Konversi tanggal ke format Y-m-d
        $validatedData['paid_date'] = Carbon::createFromFormat('d-m-Y', $validatedData['paid_date'])->format('Y-m-d');

        $payments->update($validatedData);

        return redirect('payments')->with('flash_message', 'Payment Updated!');
        
        // $payments  = Payment::find($id);
        // $input = $request->all();

        // // Konversi format tanggal dari d-m-Y ke Y-m-d
        // if ($request->has('paid_date')) {
        //     $input['paid_date'] = Carbon::createFromFormat('d-m-Y', $request->paid_date)->format('Y-m-d');
        // }

        // $payments->update($input);
        // return redirect('payments')->with('flash_message', 'Payment Updated!');
    }

    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}
