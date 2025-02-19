<?php

namespace App\Http\Controllers; // Menentukan namespace agar sesuai dengan struktur folder Laravel

// Membuat kelas abstrak Controller yang akan menjadi dasar bagi controller lain
abstract class Controller
{
    // Kelas ini berfungsi sebagai induk (parent class) untuk semua controller di dalam aplikasi Laravel
    // Karena ini adalah kelas abstrak, maka tidak bisa dibuat objeknya secara langsung
    // Kelas ini dapat digunakan untuk mendefinisikan metode atau properti yang akan diwarisi oleh semua controller lainnya
}
