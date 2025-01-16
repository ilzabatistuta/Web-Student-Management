<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function report($pid)
    {
        $payment = Payment::with(['enrollment.student', 'enrollment.batch'])->findOrFail($pid);

        // Format paid_date menggunakan Carbon
        $paidDate = Carbon::parse($payment->paid_date)->format('d-m-Y'); // Format Indonesia: dd-mm-yyyy

        $pdf = app('dompdf.wrapper');
        $print = "<div style='font-family: Arial, sans-serif; margin: 20px; padding: 20px;'>";

        // Header with a nice background color
        $print .= "<div style='text-align: center; background-color: #f8f9fa; padding: 15px; border-radius: 5px;'>";
        $print .= "<h1 style='color: #007bff; font-size: 24px; margin: 0;'>Payment Receipt</h1>";
        $print .= "</div>";
        $print .= "<hr style='border: 1px solid #007bff;'>";

        // Receipt details
        $print .= "<div style='margin-top: 20px;'>";
        $print .= "<p><strong>Receipt No: </strong>" . $pid . "</p>";
        $print .= "<p><strong>Date: </strong>" . $paidDate . "</p>";
        $print .= "<p><strong>Enrollment No: </strong>" . $payment->enrollment->enroll_no . "</p>";

        // Student name
        $studentName = $payment->enrollment?->student?->name ?? 'N/A';
        $print .= "<p><strong>Student Name: </strong>" . $studentName . "</p>";
        $print .= "</div>";

        $print .= "<hr style='border: 1px solid #007bff; margin-top: 20px;'>";

        // Table for batch and amount
        $print .= "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>";
        $print .= "<tr style='background-color: #f1f1f1;'>";
        $print .= "<th style='padding: 8px; text-align: left; font-size: 16px; border: 1px solid #ddd;'>Batch</th>";
        $print .= "<th style='padding: 8px; text-align: left; font-size: 16px; border: 1px solid #ddd;'>Amount</th>";
        $print .= "</tr>";

        // Batch and Amount
        $print .= "<tr>";
        $print .= "<td style='padding: 8px; font-size: 16px; border: 1px solid #ddd;'>" . $payment->enrollment->batch->name . "</td>";
        $print .= "<td style='padding: 8px; font-size: 16px; border: 1px solid #ddd;'>Rp " . number_format($payment->amount, 0, ',', '.') . "</td>";
        $print .= "</tr>";
        $print .= "</table>";

        $print .= "<hr style='border: 1px solid #007bff; margin-top: 20px;'>";

        // Footer
        $currentDate = Carbon::now()->format('d-m-Y');
        $userName = Auth::check() ? Auth::user()->name : 'Admin';
        $print .= "<div style='text-align: right; font-size: 14px; margin-top: 20px;'>";
        $print .= "<p><strong>Printed By: </strong>" . $userName . "</p>";
        $print .= "<p><strong>Printed Date: </strong>" . $currentDate . "</p>";
        $print .= "</div>";

        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
