<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil jumlah student dan teacher
        $studentsCount = Student::count();
        $teachersCount = Teacher::count();

        // Data contoh untuk tren (bulan Januari-Mei, ganti dengan data yang sebenarnya)
        $studentsCountJanuary = Student::whereMonth('created_at', 1)->count();
        $studentsCountFebruary = Student::whereMonth('created_at', 2)->count();
        $studentsCountMarch = Student::whereMonth('created_at', 3)->count();
        $studentsCountApril = Student::whereMonth('created_at', 4)->count();
        $studentsCountMay = Student::whereMonth('created_at', 5)->count();

        $teachersCountJanuary = Teacher::whereMonth('created_at', 1)->count();
        $teachersCountFebruary = Teacher::whereMonth('created_at', 2)->count();
        $teachersCountMarch = Teacher::whereMonth('created_at', 3)->count();
        $teachersCountApril = Teacher::whereMonth('created_at', 4)->count();
        $teachersCountMay = Teacher::whereMonth('created_at', 5)->count();

        // Kirim data ke view
        return view('home', compact(
            'studentsCount', 'teachersCount', 
            'studentsCountJanuary', 'studentsCountFebruary', 'studentsCountMarch', 'studentsCountApril', 'studentsCountMay',
            'teachersCountJanuary', 'teachersCountFebruary', 'teachersCountMarch', 'teachersCountApril', 'teachersCountMay'
        ));
    }
}

